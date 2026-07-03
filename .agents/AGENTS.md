# Mindflasher Workspace Rules

This file guides Antigravity agents working on the Mindflasher recovery project.

## Project Domain & Core Logic (Business Context)

- **Core System (Leitner System):** The application is a spaced repetition learning tool based on the Leitner system. When designing database schemas, algorithms, or API responses, prioritize efficient calculation of repetition intervals, user progress tracking, and seamless deck/card management.
- **Target Platform (Telegram Mini App):** The frontend is designed as a Telegram Mini App (TMA). 
  - Keep UI/UX suggestions aligned with mobile-first principles and Telegram WebApp API capabilities (e.g., using Telegram theme colors, handling the Main Button / Back Button).
  - Backend authentication and session management must account for Telegram's `initData` validation.
- **Key Product Pillars:**
  - **Multilingualism (i18n):** Hardcoding user-facing strings is strictly prohibited.
    - **Flutter:** Use the custom screen-specific translation classes in [lib/translates/](file:///home/artem/mf_new/mindflasher_4/lib/translates/) (e.g., `DeckIndexScreenTranslate`) resolving strings via `txt.tt('key')`. Standard i18n packages or `.arb` files are not used.
    - **Laravel:** Localization is content-driven. The database seeders store localized template decks/categories under [database/seeders/seeds_data/](file:///home/artem/mf_new/database/seeders/seeds_data/) (subdirectories `en/`, `ru/`, `uk/`), filtered on the backend by the user's `language_code` (e.g., `where('lang', $lang)`). API response messages are not localized.
  - **User Experience (UX):** The app must be fast and intuitive. Prioritize optimistic UI updates in Flutter and fast response times in Laravel to keep the learning flow uninterrupted.
- **Creative Autonomy & Problem Solving:** When asked to implement a new feature or solve a complex issue, analyze how it fits into the Leitner methodology and TMA constraints. Do not just write code—suggest architectural improvements, better repetition algorithms, or enhanced UX patterns if you see a more optimal solution.

## Repository Setup and Workspace Structure

- The workspace `/home/artem/mf_new` is the Laravel backend repository.
- The Flutter client frontend repository is linked as a symbolic link inside this workspace:
  - Path: `/home/artem/mf_new/mindflasher_4` (pointing to `C:\Users\Artem\StudioProjects\mindflasher_4` on the Windows host).
- When asked to perform cross-project updates (e.g., updating Dart models after Laravel API changes), look into the `mindflasher_4` folder.
- Avoid committing `mindflasher_4` to Git (it is excluded in `.gitignore`).

## API Contract

- The backend API contract is documented in [README_BACKEND.md](file:///home/artem/mf_new/README_BACKEND.md).
- Keep the Laravel API and Flutter app aligned to this contract.

## Docker Environment & Commands

- The backend runs in a Docker Compose environment.
- The PHP service container is named `php` (often runs as container `mf_new-php`).
- When running Laravel Artisan commands, database migrations, seeds, or tests, execute them inside the Docker container using:
  `docker compose exec php php artisan <command>`
  For example:
  - Run migrations: `docker compose exec php php artisan migrate`
  - Run database seeders: `docker compose exec php php artisan db:seed`
  - Run tests: `docker compose exec php php artisan test`
- Do not run php/artisan commands directly in the host WSL shell, as it lacks database connectivity.

## Flutter / Dart Environment constraints

- The Flutter/Dart SDK is installed on the Windows host, not within the WSL Ubuntu environment.
- Do NOT run `flutter`, `dart`, or `pub` commands in the WSL shell.
- When dependencies need updating or code needs to be verified, modify the files directly in WSL (they are mirrored via symlink) and instruct the user to run the relevant commands (e.g. `flutter pub get`, `flutter run`) in their Windows host terminal (PowerShell / Command Prompt).

## Interaction & Execution Rules

- **No unauthorized commands**: Never execute state-changing artisan commands (`migrate`, `db:seed`, etc.) without explicit user permission or instruction.
- **"Let's think" constraint**: If the user says "Let's think" ("Давай подумаем"), discuss options in chat and do not edit any files until approved.
