# App Usage Visual Interpreter (Dashboard)

This feature implements a visual usage dashboard (interpreter) for tracking user activity, active decks, learning progress (spaced repetition weights, mastery level, and due cards), and AI credit consumption.

The system requires no traditional login credentials (such as username and password) and instead uses an obfuscated URL route key (e.g. `/dashboard/secret54`) configured via the environment.

---

## Architecture & Integration

- **Route Configuration:**
  - Serving the visual layout: `GET /dashboard/{secret}` mapped to `AppUsageDashboardController@index`
  - High-level stats & users directory: `GET /dashboard/{secret}/data` mapped to `AppUsageDashboardController@data`
  - Selected user details, decks & transaction history: `GET /dashboard/{secret}/user/{id}` mapped to `AppUsageDashboardController@userDetails`
- **Security Check:** 
  The path parameter `{secret}` is validated against the configured secret key in `config/services.php` (loaded from `DASHBOARD_SECRET` in `.env`). If there is a mismatch, the server returns a `404 Not Found` response to hide the page existence.

---

## Configuration

To customize or set your dashboard access URL, update the following parameters in your `.env` configuration file:

```env
# The secret URL segment to access the dashboard.
# Access URL will be: http://<your-host>/dashboard/secret54
DASHBOARD_SECRET=secret54
```

---

## Design System & Styling (dashboard.blade.php)

The visual interface is built as a single-page application inside standard Laravel Blade views (`resources/views/dashboard.blade.php`) using:
- **Vanilla CSS styling:** Modern custom dark theme (`#080b11` to `#0e1320`) featuring frosted-glass elements, neon glows (`#6366f1` and `#a855f7`), and smooth transitions.
- **Lucide Icons:** Icons loaded dynamically via CDN for interactive components.
- **Interactive JS Logic:**
  - Real-time search by user name, username, and Telegram ID.
  - Filter directory list by language codes (`ru`, `en`, `uk`) and activity statuses (Active: within 7 days, Idle: 7-30 days, Inactive: >30 days).
  - Side-panel inspector rendering specific user details, deck learning progress bars (Studied cards % vs. Mastered cards %), and chronological AI credits transaction list.

---

## Code References

### Backend Changes:
- **Routes:** Registered in [routes/web.php](file:///home/artem/mf_new/routes/web.php)
- **Controller:** [AppUsageDashboardController.php](file:///home/artem/mf_new/app/Http/Controllers/AppUsageDashboardController.php) containing aggregated database queries.
- **User Model:** Added standard `decks()` relation in [User.php](file:///home/artem/mf_new/app/Models/User.php).
- **Service Configuration:** Registered in [config/services.php](file:///home/artem/mf_new/config/services.php).
- **Environment variables:** Configured in [.env](file:///home/artem/mf_new/.env) and [.env.example](file:///home/artem/mf_new/.env.example).

### Tests:
- **Feature Tests:** Registered in [AppUsageDashboardTest.php](file:///home/artem/mf_new/tests/Feature/AppUsageDashboardTest.php) to verify authorization logic and query integrity.
