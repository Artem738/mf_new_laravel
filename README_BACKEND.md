# Backend Contract

This document defines the current Flutter-to-Laravel contract for the Mindflasher client recovery.

## Goals

- Keep Flutter and Laravel aligned while the old backend is being restored.
- Avoid silent mismatches in auth payloads, Telegram login, user fields, and diagnostics behavior.
- Make it possible to run manual integration tests after the Laravel API is started.

## Auth endpoints expected by Flutter

- `POST /api/login`
  - Request: `{ "email": string, "password": string }`
  - Response `200`: `{ "access_token": string, "user": {...} }`

- `POST /api/register`
  - Request: `{ "name": string, "email": string, "password": string, "password_confirmation": string, "language_code": string|null }`
  - Response `201`

- `POST /api/telegram/auth`
  - Request: `{ "initData": string, "language_code": string|null }`
  - Response `200`: `{ "token": string, "user": {...} }`

## User payload required by Flutter

The Flutter app expects these fields inside `user` when authenticated:

- `id`
- `name`
- `email`
- `user_lvl`
- `telegram_id`
- `tg_username`
- `tg_first_name`
- `tg_last_name`
- `tg_language_code`
- `language_code`
- `base_font_size`
- `auth_date` for Telegram login flows

Nullable fields are allowed for email-only users and non-Telegram sessions, but field names should remain stable.

## Bearer auth expected by Flutter

These endpoints are called with `Authorization: Bearer <token>`:

- `GET /api/decks`
- `POST /api/decks`
- `PUT /api/decks/{id}`
- `DELETE /api/decks/{id}`
- `GET /api/template-decks`
- `GET /api/template-decks/{id}/flashcards`
- `POST /api/add-template-to-user`
- `GET /api/decks/{id}/flashcards`
- `POST /api/flashcards`
- `PUT /api/flashcards/{id}`
- `DELETE /api/flashcards/{id}`
- `POST /api/flashcards/csv-insert`
- `POST /api/flashcards/{id}/progress/weight`
- `PUT /api/user/base-font-size`
- `PATCH /api/user/language`

## Telegram Mini App notes

- Flutter web now delays Telegram auth until language is known.
- Backend should accept Telegram `initData` from the WebApp context and validate it correctly.
- If the backend rejects Telegram login, the app should still remain usable in normal web/app mode.

## Admin diagnostics contract

- Flutter shows the in-app log viewer only when `user_lvl >= 10`.
- If the old backend uses a different admin level convention, either align the backend or update Flutter in one place: `UserModel.isAdminForDiagnostics`.

## Logging endpoint

- Optional endpoint: `POST /api/log`
- Request: `{ "message": string }`
- If this endpoint is unavailable, Flutter still keeps local structured logs for manual testing.

## Recommended Laravel recovery steps

1. Restore auth routes and return payloads exactly in the shapes listed above.
2. Confirm bearer token middleware works for all deck/card endpoints.
3. Verify CORS and session headers for web and Telegram Mini App launches.
4. Add one seeded admin account with `user_lvl >= 10` for diagnostics access.
5. Test three flows separately: email login, Telegram Mini App login, and web/app startup without Telegram.