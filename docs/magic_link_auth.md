# Magic Link Authentication (Web Access Key)

## Overview
This feature allows users who are logged into the Telegram Mini App to generate a temporary, one-time "magic link". This link can be copied to the clipboard and pasted into a standard mobile or desktop browser (like Chrome or Safari). When the user opens the link, they are automatically authenticated in the browser without needing to enter an email or password.
This was primarily implemented because the Voice Lesson (hands-free) module requires continuous microphone access, which is often interrupted or restricted within the Telegram in-app browser environment.

## How it works

### 1. Link Generation (Backend)
- When the user taps the "Copy Web Link" button in the Flutter app (e.g., on the `VoiceLessonScreen`), the app calls `ProviderUserControl.generateWebLink()`.
- This triggers a `GET` request to `/api/user/web-link` on the Laravel backend.
- `UserController::generateWebLink` generates a random 64-character `$key`.
- For security, a SHA-256 hash of this key (`hash('sha256', $key)`) is saved to the `web_access_key` column in the `users` table.
- The plaintext key is appended to the frontend URL (`https://mf.sitelab-studio.com/a/?key=...`) and returned to the frontend, which copies it to the clipboard.

### 2. URL Parsing (Frontend Bootstrap)
- When the user opens the copied link in a regular browser, Flutter initializes.
- **Critical Flutter Web Issue:** Flutter's internal router often strips query parameters from `Uri.base` during startup.
- **Solution:** A native `dart:html` helper (`url_helper_web.dart`) is conditionally imported via `url_helper.dart`. It reads `window.location.search` *before* the Flutter framework overrides the URL, ensuring the `key` parameter is always safely captured.
- This `initialWebKey` is passed to `ProviderUserLogin`.

### 3. Login Flow (Frontend to Backend)
- During `ProviderUserLogin.initialize()`, if an `initialWebKey` is present and the user is not already logged in locally, it calls `_loginWithWebKey(key)`.
- The frontend sends a `POST` request to `/api/web-login` with the plaintext key.
- `AuthController::webLogin` hashes the incoming key and searches the database for a matching `web_access_key`.
- If found, the user is authenticated, a new Sanctum token is generated, and the `web_access_key` is immediately set to `null` (making the link strictly one-time use).
- The Flutter app receives the token, saves it locally, and redirects the user directly to the application (`AppBootstrapRoute.decks`).

## Important Implementation Details
- **One-Time Use:** The link can only be used once. If the user clears their browser cache, they must generate a new link from Telegram.
- **Environment Configuration:** `EnvConfig.mainApiUrl` must be initialized synchronously in `main.dart` *before* any logs or API calls are made, to ensure that `ApiLogger` does not fail when logging the bootstrap process.
- **Telegram Environment Override:** If the user accidentally clicks the magic link *inside* Telegram, Telegram will intercept the URL, launch the Mini App, and completely overwrite the URL with `#tgWebAppData=...`. The magic link logic will be silently skipped, but the standard Telegram auth will log the user in anyway.

## Modified Files
### Frontend (Flutter)
- `lib/main.dart`: Added early URL parsing and `EnvConfig` initialization.
- `lib/url_helper.dart`, `lib/url_helper_web.dart`, `lib/url_helper_stub.dart`: Conditional imports to safely read `window.location.search`.
- `lib/providers/provider_user_login.dart`: Added `_loginWithWebKey` flow and extensive `ApiLogger` tracing.
- `lib/providers/provider_user_control.dart`: Added `generateWebLink()` method.
- `lib/screens/deck/voice_lesson_screen.dart`: Added the "Copy Web Link" UI and Telegram warning banner.
- `lib/screens/login_screen.dart`: Displays `errorMessage` directly on the screen if web login fails.

### Backend (Laravel)
- `routes/api.php`: Added `/web-link` (GET) and `/web-login` (POST) routes.
- `app/Http/Controllers/UserController.php`: `generateWebLink` method (hashes key before saving).
- `app/Http/Controllers/AuthController.php`: `webLogin` method (authenticates, issues token, nullifies key).
- `database/migrations/..._add_web_access_key_to_users_table.php`: Added `web_access_key` column.
