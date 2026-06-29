# Mindflasher Workspace Rules

This file guides Antigravity agents working on the Mindflasher recovery project.

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

