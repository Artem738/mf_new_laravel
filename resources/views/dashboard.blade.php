<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindflasher Usage Dashboard</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        :root {
            --bg-primary: #080b11;
            --bg-secondary: #0e1320;
            --glass-bg: rgba(15, 22, 38, 0.7);
            --glass-bg-hover: rgba(22, 32, 56, 0.85);
            --glass-border: rgba(255, 255, 255, 0.08);
            --glass-border-focused: rgba(99, 102, 241, 0.4);
            --text-primary: #f9fafb;
            --text-secondary: #9ca3af;
            --text-muted: #6b7280;
            --color-primary: #6366f1;
            --color-primary-glow: rgba(99, 102, 241, 0.15);
            --color-accent: #a855f7;
            --color-accent-glow: rgba(168, 85, 247, 0.15);
            --color-success: #10b981;
            --color-success-glow: rgba(16, 185, 129, 0.15);
            --color-warning: #f59e0b;
            --color-danger: #ef4444;
            --color-info: #06b6d4;
            --font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --shadow-glow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-family);
            background-color: var(--bg-primary);
            color: var(--text-primary);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            background-image: 
                radial-gradient(at 10% 20%, rgba(99, 102, 241, 0.1) 0px, transparent 50%),
                radial-gradient(at 90% 10%, rgba(168, 85, 247, 0.08) 0px, transparent 50%),
                radial-gradient(at 50% 80%, rgba(6, 182, 212, 0.06) 0px, transparent 50%);
            background-attachment: fixed;
        }

        /* Layout Container */
        .container {
            width: 100%;
            max-width: 1600px;
            margin: 0 auto;
            padding: 2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        /* Top Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid var(--glass-border);
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo-icon {
            width: 42px;
            height: 42px;
            background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 20px rgba(99, 102, 241, 0.4);
        }

        .logo-icon i {
            color: white;
            width: 22px;
            height: 22px;
        }

        .title-group h1 {
            font-size: 1.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, #ffffff 30%, #a5b4fc 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.025em;
        }

        .title-group p {
            font-size: 0.85rem;
            color: var(--text-secondary);
        }

        .status-badge {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--color-success);
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background-color: var(--color-success);
            border-radius: 50%;
            display: inline-block;
            animation: pulse-dot 2s infinite;
        }

        @keyframes pulse-dot {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 6px rgba(16, 185, 129, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
        }

        /* KPI Cards Grid */
        .kpis-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.25rem;
        }

        .kpi-card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: var(--radius-lg);
            padding: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: var(--shadow-glow);
            backdrop-filter: blur(12px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .kpi-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--color-primary-glow), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }

        .kpi-card:hover {
            transform: translateY(-4px);
            border-color: rgba(99, 102, 241, 0.25);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
        }

        .kpi-card:hover::before {
            opacity: 1;
        }

        .kpi-details h3 {
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
        }

        .kpi-value {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-primary);
            letter-spacing: -0.03em;
        }

        .kpi-icon {
            width: 48px;
            height: 48px;
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .kpi-card:nth-child(1) .kpi-icon { background: rgba(99, 102, 241, 0.1); color: var(--color-primary); }
        .kpi-card:nth-child(2) .kpi-icon { background: rgba(168, 85, 247, 0.1); color: var(--color-accent); }
        .kpi-card:nth-child(3) .kpi-icon { background: rgba(6, 182, 212, 0.1); color: var(--color-info); }
        .kpi-card:nth-child(4) .kpi-icon { background: rgba(16, 185, 129, 0.1); color: var(--color-success); }
        .kpi-card:nth-child(5) .kpi-icon { background: rgba(245, 158, 11, 0.1); color: var(--color-warning); }
        .kpi-card:nth-child(6) .kpi-icon { background: rgba(239, 68, 68, 0.1); color: var(--color-danger); }

        .kpi-icon i {
            width: 24px;
            height: 24px;
        }

        /* Main Workspace Grid */
        .workspace {
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 1.5rem;
            align-items: start;
            flex-grow: 1;
        }

        @media (max-width: 1100px) {
            .workspace {
                grid-template-columns: 1fr;
            }
        }

        /* Panel Common Styles */
        .panel {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-glow);
            backdrop-filter: blur(12px);
            display: flex;
            flex-direction: column;
            height: 700px;
            overflow: hidden;
        }

        .panel-header {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .panel-title {
            font-size: 1.1rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .panel-title i {
            width: 20px;
            height: 20px;
            color: var(--color-primary);
        }

        /* Directory Controls */
        .controls-row {
            padding: 1rem 1.5rem;
            background: rgba(0, 0, 0, 0.15);
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            gap: 1rem;
        }

        .search-wrapper {
            position: relative;
            flex-grow: 1;
        }

        .search-wrapper i {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            color: var(--text-muted);
            pointer-events: none;
        }

        .search-input {
            width: 100%;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid var(--glass-border);
            border-radius: var(--radius-sm);
            padding: 0.6rem 1rem 0.6rem 2.25rem;
            color: var(--text-primary);
            font-family: inherit;
            font-size: 0.9rem;
            outline: none;
            transition: all 0.2s ease;
        }

        .search-input:focus {
            border-color: var(--color-primary);
            box-shadow: 0 0 0 3px var(--color-primary-glow);
        }

        .filter-select {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid var(--glass-border);
            border-radius: var(--radius-sm);
            padding: 0.6rem 2rem 0.6rem 1rem;
            color: var(--text-primary);
            font-family: inherit;
            font-size: 0.9rem;
            outline: none;
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%239ca3af' stroke-width='2'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 1rem;
            transition: all 0.2s ease;
            min-width: 130px;
        }

        .filter-select:focus {
            border-color: var(--color-primary);
        }

        /* Users Table Area */
        .table-area {
            flex-grow: 1;
            overflow-y: auto;
            position: relative;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            position: sticky;
            top: 0;
            background: var(--bg-secondary);
            padding: 0.9rem 1.25rem;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-secondary);
            border-bottom: 1px solid var(--glass-border);
            z-index: 10;
        }

        td {
            padding: 0.9rem 1.25rem;
            font-size: 0.875rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.04);
            vertical-align: middle;
            color: var(--text-primary);
        }

        tbody tr {
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        tbody tr:hover {
            background-color: var(--glass-bg-hover);
        }

        tbody tr.selected {
            background-color: var(--color-primary-glow);
            border-left: 3px solid var(--color-primary);
        }

        .user-cell {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.85rem;
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        .user-identity {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-weight: 600;
            color: var(--text-primary);
        }

        .user-username {
            font-size: 0.75rem;
            color: var(--text-secondary);
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .badge-lang {
            background: rgba(6, 182, 212, 0.1);
            color: var(--color-info);
            border: 1px solid rgba(6, 182, 212, 0.2);
        }

        .badge-level {
            background: rgba(245, 158, 11, 0.1);
            color: var(--color-warning);
            border: 1px solid rgba(245, 158, 11, 0.2);
        }

        .badge-credits {
            background: rgba(168, 85, 247, 0.1);
            color: var(--color-accent);
            border: 1px solid rgba(168, 85, 247, 0.2);
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .badge-credits i {
            width: 12px;
            height: 12px;
        }

        .activity-indicator {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.8rem;
        }

        .activity-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }

        .activity-dot.active { background-color: var(--color-success); box-shadow: 0 0 6px var(--color-success); }
        .activity-dot.idle { background-color: var(--color-warning); }
        .activity-dot.inactive { background-color: var(--text-muted); }

        /* Detail Panel Area */
        .detail-area {
            flex-grow: 1;
            overflow-y: auto;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            position: relative;
        }

        /* Empty State */
        .empty-state {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: var(--text-secondary);
            text-align: center;
            padding: 3rem;
            gap: 1rem;
        }

        .empty-state-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid var(--glass-border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            box-shadow: var(--shadow-glow);
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }

        .empty-state-icon i {
            width: 36px;
            height: 36px;
        }

        .empty-state h4 {
            font-size: 1.1rem;
            color: var(--text-primary);
            font-weight: 600;
        }

        .empty-state p {
            font-size: 0.85rem;
            max-width: 300px;
            line-height: 1.5;
        }

        /* Selected User Card */
        .detail-user-card {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid var(--glass-border);
            border-radius: var(--radius-md);
            padding: 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .detail-user-left {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .detail-user-avatar {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }

        .detail-user-info h2 {
            font-size: 1.2rem;
            font-weight: 700;
        }

        .detail-user-info p {
            font-size: 0.8rem;
            color: var(--text-secondary);
        }

        .detail-user-badges {
            display: flex;
            gap: 0.5rem;
            margin-top: 0.4rem;
        }

        .detail-user-right {
            text-align: right;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 0.25rem;
        }

        .detail-user-id {
            font-size: 0.75rem;
            font-family: monospace;
            color: var(--text-muted);
        }

        /* Detail Section Titles */
        .detail-section-title {
            font-size: 0.9rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-secondary);
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .detail-section-title i {
            width: 16px;
            height: 16px;
            color: var(--color-primary);
        }

        /* Deck Card */
        .deck-card {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid var(--glass-border);
            border-radius: var(--radius-md);
            padding: 1rem;
            margin-bottom: 0.75rem;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            transition: all 0.2s ease;
        }

        .deck-card:hover {
            border-color: rgba(99, 102, 241, 0.2);
            background: rgba(255, 255, 255, 0.04);
        }

        .deck-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .deck-title-group {
            display: flex;
            flex-direction: column;
            gap: 0.15rem;
        }

        .deck-name {
            font-weight: 600;
            font-size: 0.95rem;
        }

        .deck-desc {
            font-size: 0.75rem;
            color: var(--text-secondary);
            line-height: 1.4;
        }

        .deck-meta-badges {
            display: flex;
            gap: 0.4rem;
            align-items: center;
        }

        .badge-template {
            background: rgba(168, 85, 247, 0.12);
            color: var(--color-accent);
            border: 1px solid rgba(168, 85, 247, 0.2);
            font-size: 0.7rem;
            padding: 0.1rem 0.4rem;
            border-radius: 4px;
        }

        .badge-custom {
            background: rgba(107, 114, 128, 0.12);
            color: var(--text-secondary);
            border: 1px solid rgba(107, 114, 128, 0.2);
            font-size: 0.7rem;
            padding: 0.1rem 0.4rem;
            border-radius: 4px;
        }

        .deck-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0.5rem;
            background: rgba(0, 0, 0, 0.15);
            padding: 0.6rem;
            border-radius: var(--radius-sm);
            text-align: center;
        }

        .deck-stat-box {
            display: flex;
            flex-direction: column;
            gap: 0.2rem;
        }

        .deck-stat-label {
            font-size: 0.65rem;
            text-transform: uppercase;
            color: var(--text-muted);
            letter-spacing: 0.02em;
        }

        .deck-stat-val {
            font-size: 0.9rem;
            font-weight: 700;
        }

        /* Progress Bars */
        .deck-progress-wrapper {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
        }

        .progress-bar-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.7rem;
        }

        .progress-bar-label {
            color: var(--text-secondary);
        }

        .progress-bar-pct {
            font-weight: 600;
        }

        .progress-track {
            height: 6px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 999px;
            overflow: hidden;
            width: 100%;
        }

        .progress-fill {
            height: 100%;
            border-radius: 999px;
            transition: width 0.5s ease-out;
        }

        .progress-fill.studied { background: linear-gradient(90deg, var(--color-primary), var(--color-info)); }
        .progress-fill.mastered { background: linear-gradient(90deg, var(--color-success), #34d399); }

        /* Transactions List */
        .transactions-list {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .tx-item {
            background: rgba(255, 255, 255, 0.01);
            border: 1px solid rgba(255, 255, 255, 0.03);
            border-radius: var(--radius-sm);
            padding: 0.75rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
        }

        .tx-left {
            display: flex;
            flex-direction: column;
            gap: 0.15rem;
        }

        .tx-desc {
            font-weight: 500;
            color: var(--text-primary);
        }

        .tx-date {
            font-size: 0.7rem;
            color: var(--text-muted);
        }

        .tx-right {
            text-align: right;
            display: flex;
            flex-direction: column;
            gap: 0.15rem;
        }

        .tx-amount {
            font-weight: 700;
        }

        .tx-amount.positive { color: var(--color-success); }
        .tx-amount.negative { color: var(--color-danger); }

        .tx-balance {
            font-size: 0.7rem;
            color: var(--text-muted);
        }

        /* Loading Overlay */
        .loading-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(8, 11, 17, 0.85);
            backdrop-filter: blur(4px);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 100;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.25s ease;
        }

        .loading-overlay.visible {
            opacity: 1;
            pointer-events: auto;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 3px solid rgba(99, 102, 241, 0.1);
            border-radius: 50%;
            border-top-color: var(--color-primary);
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Scrollbars */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>

    <div class="container">
        
        <!-- Header -->
        <header>
            <div class="logo-area">
                <div class="logo-icon">
                    <i data-lucide="bar-chart-2"></i>
                </div>
                <div class="title-group">
                    <h1>Mindflasher Interpreter</h1>
                    <p>Live usage tracking & activity analytics</p>
                </div>
            </div>
            <div class="status-badge">
                <span class="status-dot"></span>
                LIVE UPDATES
            </div>
        </header>

        <!-- KPI Grid -->
        <div class="kpis-grid">
            <div class="kpi-card">
                <div class="kpi-details">
                    <h3>Total Users</h3>
                    <div class="kpi-value" id="kpi-users">-</div>
                </div>
                <div class="kpi-icon">
                    <i data-lucide="users"></i>
                </div>
            </div>
            
            <div class="kpi-card">
                <div class="kpi-details">
                    <h3>Active Users (7d)</h3>
                    <div class="kpi-value" id="kpi-active-users">-</div>
                </div>
                <div class="kpi-icon">
                    <i data-lucide="user-check"></i>
                </div>
            </div>
            
            <div class="kpi-card">
                <div class="kpi-details">
                    <h3>Total Decks</h3>
                    <div class="kpi-value" id="kpi-decks">-</div>
                </div>
                <div class="kpi-icon">
                    <i data-lucide="layers"></i>
                </div>
            </div>

            <div class="kpi-card">
                <div class="kpi-details">
                    <h3>Flashcards</h3>
                    <div class="kpi-value" id="kpi-cards">-</div>
                </div>
                <div class="kpi-icon">
                    <i data-lucide="copy"></i>
                </div>
            </div>

            <div class="kpi-card">
                <div class="kpi-details">
                    <h3>Spaced Reviews</h3>
                    <div class="kpi-value" id="kpi-reviews">-</div>
                </div>
                <div class="kpi-icon">
                    <i data-lucide="repeat"></i>
                </div>
            </div>

            <div class="kpi-card">
                <div class="kpi-details">
                    <h3>AI Credits Pool</h3>
                    <div class="kpi-value" id="kpi-credits">-</div>
                </div>
                <div class="kpi-icon">
                    <i data-lucide="sparkles"></i>
                </div>
            </div>
        </div>

        <!-- Main Workspace -->
        <div class="workspace">
            
            <!-- Users Directory Panel -->
            <div class="panel">
                <div class="panel-header">
                    <div class="panel-title">
                        <i data-lucide="book-open"></i>
                        Users Directory
                    </div>
                </div>
                
                <!-- Filters -->
                <div class="controls-row">
                    <div class="search-wrapper">
                        <i data-lucide="search"></i>
                        <input type="text" id="search-input" class="search-input" placeholder="Search by name, username, telegram ID...">
                    </div>
                    <select id="filter-lang" class="filter-select">
                        <option value="">All Languages</option>
                        <option value="ru">Russian (RU)</option>
                        <option value="en">English (EN)</option>
                        <option value="uk">Ukrainian (UK)</option>
                    </select>
                    <select id="filter-status" class="filter-select">
                        <option value="">All Statuses</option>
                        <option value="active">Active (7d)</option>
                        <option value="idle">Idle (7-30d)</option>
                        <option value="inactive">Inactive (>30d)</option>
                    </select>
                </div>

                <!-- Table Area -->
                <div class="table-area">
                    <div class="loading-overlay" id="directory-loading">
                        <div class="spinner"></div>
                    </div>
                    <table id="users-table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Telegram ID</th>
                                <th>Decks</th>
                                <th>Credits</th>
                                <th>Last Review</th>
                                <th>Joined</th>
                            </tr>
                        </thead>
                        <tbody id="users-tbody">
                            <!-- Populated dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Insights Inspector Panel -->
            <div class="panel" style="position: relative;">
                <div class="loading-overlay" id="details-loading">
                    <div class="spinner"></div>
                </div>

                <div class="panel-header">
                    <div class="panel-title">
                        <i data-lucide="activity"></i>
                        User Insights
                    </div>
                </div>

                <div class="detail-area" id="detail-container">
                    <!-- Empty state by default -->
                    <div class="empty-state">
                        <div class="empty-state-icon">
                            <i data-lucide="user"></i>
                        </div>
                        <h4>No User Selected</h4>
                        <p>Select a user from the directory on the left to inspect detailed deck configurations, learning progress, and AI credits history.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script>
        const SECRET = "{{ $secret }}";
        let allUsers = [];
        let selectedUserId = null;

        document.addEventListener('DOMContentLoaded', () => {
            fetchDashboardData();
            
            // Set up search and filters
            document.getElementById('search-input').addEventListener('input', applyFilters);
            document.getElementById('filter-lang').addEventListener('change', applyFilters);
            document.getElementById('filter-status').addEventListener('change', applyFilters);
        });

        // Fetch overview stats and users directory
        async function fetchDashboardData() {
            showLoading('directory-loading', true);
            try {
                const response = await fetch(`/dashboard/${SECRET}/data`);
                if (!response.ok) throw new Error('Failed to load dashboard data');
                
                const data = await response.json();
                
                // Set stats
                document.getElementById('kpi-users').innerText = formatNum(data.stats.total_users);
                document.getElementById('kpi-active-users').innerText = formatNum(data.stats.active_users_7d);
                document.getElementById('kpi-decks').innerText = formatNum(data.stats.total_decks);
                document.getElementById('kpi-cards').innerText = formatNum(data.stats.total_cards);
                document.getElementById('kpi-reviews').innerText = formatNum(data.stats.total_reviews);
                document.getElementById('kpi-credits').innerText = formatNum(data.stats.total_ai_credits);

                allUsers = data.users;
                renderUsersTable(allUsers);
            } catch (err) {
                console.error(err);
                alert('Error loading dashboard data.');
            } finally {
                showLoading('directory-loading', false);
            }
        }

        // Render user directory table
        function renderUsersTable(usersList) {
            const tbody = document.getElementById('users-tbody');
            tbody.innerHTML = '';

            if (usersList.length === 0) {
                tbody.innerHTML = `<tr><td colspan="6" style="text-align: center; padding: 2rem; color: var(--text-secondary);">No matching users found</td></tr>`;
                return;
            }

            usersList.forEach(user => {
                const initials = (user.name || 'U').substring(0, 2).toUpperCase();
                const displayName = user.name || `${user.tg_first_name || ''} ${user.tg_last_name || ''}`.trim() || 'User';
                const username = user.tg_username ? `@${user.tg_username}` : 'No username';
                
                // Calculate status color
                const statusInfo = getStatusInfo(user.last_activity);
                
                const row = document.createElement('tr');
                row.dataset.userId = user.id;
                if (selectedUserId === user.id) row.classList.add('selected');
                
                row.innerHTML = `
                    <td>
                        <div class="user-cell">
                            <div class="user-avatar">${initials}</div>
                            <div class="user-identity">
                                <span class="user-name">${escapeHtml(displayName)}</span>
                                <span class="user-username">${escapeHtml(username)}</span>
                            </div>
                        </div>
                    </td>
                    <td style="font-family: monospace; color: var(--text-secondary);">${user.telegram_id || 'N/A'}</td>
                    <td>
                        <span style="font-weight: 600;">${user.decks_count}</span>
                    </td>
                    <td>
                        <span class="badge badge-credits">
                            <i data-lucide="sparkles"></i>
                            ${user.ai_credits}
                        </span>
                    </td>
                    <td>
                        <div class="activity-indicator">
                            <span class="activity-dot ${statusInfo.class}"></span>
                            <span>${statusInfo.text}</span>
                        </div>
                    </td>
                    <td style="color: var(--text-muted); font-size: 0.8rem;">${formatDate(user.created_at)}</td>
                `;

                row.addEventListener('click', () => {
                    document.querySelectorAll('#users-tbody tr').forEach(r => r.classList.remove('selected'));
                    row.classList.add('selected');
                    selectUser(user.id);
                });

                tbody.appendChild(row);
            });

            lucide.createIcons();
        }

        // Apply filters locally
        function applyFilters() {
            const query = document.getElementById('search-input').value.toLowerCase().trim();
            const lang = document.getElementById('filter-lang').value;
            const status = document.getElementById('filter-status').value;

            const filtered = allUsers.filter(user => {
                // Search query
                const fullName = `${user.name || ''} ${user.tg_first_name || ''} ${user.tg_last_name || ''}`.toLowerCase();
                const tgUsername = (user.tg_username || '').toLowerCase();
                const tgId = String(user.telegram_id || '');
                const matchesQuery = fullName.includes(query) || tgUsername.includes(query) || tgId.includes(query);

                // Language filter
                const matchesLang = !lang || user.language_code === lang || user.tg_language_code === lang;

                // Status filter
                const statusInfo = getStatusInfo(user.last_activity);
                const matchesStatus = !status || statusInfo.class === status;

                return matchesQuery && matchesLang && matchesStatus;
            });

            renderUsersTable(filtered);
        }

        // Select a user and fetch their details
        async function selectUser(userId) {
            selectedUserId = userId;
            showLoading('details-loading', true);
            try {
                const response = await fetch(`/dashboard/${SECRET}/user/${userId}`);
                if (!response.ok) throw new Error('Failed to load user details');
                
                const data = await response.json();
                renderUserDetails(data);
            } catch (err) {
                console.error(err);
                alert('Error loading user details.');
            } finally {
                showLoading('details-loading', false);
            }
        }

        // Render user details view
        function renderUserDetails(data) {
            const container = document.getElementById('detail-container');
            const user = data.user;
            const decks = data.decks;
            const txs = data.transactions;

            const initials = (user.name || 'U').substring(0, 2).toUpperCase();
            const displayName = user.name || `${user.tg_first_name || ''} ${user.tg_last_name || ''}`.trim() || 'User';
            const username = user.tg_username ? `@${user.tg_username}` : 'No username';

            let decksHtml = '';
            if (decks.length === 0) {
                decksHtml = `<p style="color: var(--text-muted); font-size: 0.85rem; text-align: center; padding: 2rem; background: rgba(255,255,255,0.01); border-radius: var(--radius-md); border: 1px dashed var(--glass-border);">User hasn't initialized any learning decks yet.</p>`;
            } else {
                decks.forEach(deck => {
                    const templateTag = deck.template_name 
                        ? `<span class="badge-template">${escapeHtml(deck.template_name)}</span>` 
                        : `<span class="badge-custom">Custom Deck</span>`;

                    // Calculate percentages
                    const studyPct = deck.total_cards > 0 ? Math.round((deck.studied_cards / deck.total_cards) * 100) : 0;
                    const masterPct = deck.total_cards > 0 ? Math.round((deck.mastered_cards / deck.total_cards) * 100) : 0;

                    decksHtml += `
                        <div class="deck-card">
                            <div class="deck-header">
                                <div class="deck-title-group">
                                    <span class="deck-name">${escapeHtml(deck.name)}</span>
                                    ${deck.description ? `<span class="deck-desc">${escapeHtml(deck.description)}</span>` : ''}
                                </div>
                                <div class="deck-meta-badges">
                                    ${templateTag}
                                    <span class="badge badge-lang" style="font-size: 0.65rem; padding: 0.1rem 0.3rem;">
                                        ${deck.question_lang.toUpperCase()} &rarr; ${deck.answer_lang.toUpperCase()}
                                    </span>
                                </div>
                            </div>

                            <div class="deck-stats">
                                <div class="deck-stat-box">
                                    <span class="deck-stat-label">Cards</span>
                                    <span class="deck-stat-val">${deck.total_cards}</span>
                                </div>
                                <div class="deck-stat-box">
                                    <span class="deck-stat-label">Due Review</span>
                                    <span class="deck-stat-val" style="color: ${deck.due_cards > 0 ? 'var(--color-warning)' : 'var(--text-primary)'}">${deck.due_cards}</span>
                                </div>
                                <div class="deck-stat-box">
                                    <span class="deck-stat-label">Mastered</span>
                                    <span class="deck-stat-val" style="color: var(--color-success)">${deck.mastered_cards}</span>
                                </div>
                                <div class="deck-stat-box">
                                    <span class="deck-stat-label">Avg Ease</span>
                                    <span class="deck-stat-val">${deck.avg_ease_factor !== null ? deck.avg_ease_factor : '-'}</span>
                                </div>
                            </div>

                            <div class="deck-progress-wrapper">
                                <div class="progress-bar-group">
                                    <span class="progress-bar-label">Studied Cards Progress</span>
                                    <span class="progress-bar-pct">${studyPct}%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-fill studied" style="width: ${studyPct}%"></div>
                                </div>

                                <div class="progress-bar-group" style="margin-top: 0.2rem;">
                                    <span class="progress-bar-label">Mastered (>7 Days Interval)</span>
                                    <span class="progress-bar-pct">${masterPct}%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-fill mastered" style="width: ${masterPct}%"></div>
                                </div>
                            </div>
                        </div>
                    `;
                });
            }

            let txsHtml = '';
            if (txs.length === 0) {
                txsHtml = `<p style="color: var(--text-muted); font-size: 0.85rem; text-align: center; padding: 2rem; background: rgba(255,255,255,0.01); border-radius: var(--radius-md); border: 1px dashed var(--glass-border);">No credit transactions recorded yet.</p>`;
            } else {
                txs.forEach(tx => {
                    const isPositive = tx.amount >= 0;
                    const amountClass = isPositive ? 'positive' : 'negative';
                    const amountPrefix = isPositive ? '+' : '';

                    txsHtml += `
                        <div class="tx-item">
                            <div class="tx-left">
                                <span class="tx-desc">${escapeHtml(tx.description || 'System Adjustment')}</span>
                                <span class="tx-date">${formatDateTime(tx.created_at)}</span>
                            </div>
                            <div class="tx-right">
                                <span class="tx-amount ${amountClass}">${amountPrefix}${tx.amount}</span>
                                <span class="tx-balance">Bal: ${tx.balance_after}</span>
                            </div>
                        </div>
                    `;
                });
            }

            container.innerHTML = `
                <!-- User Profile Header -->
                <div class="detail-user-card">
                    <div class="detail-user-left">
                        <div class="detail-user-avatar">${initials}</div>
                        <div class="detail-user-info">
                            <h2>${escapeHtml(displayName)}</h2>
                            <p>${escapeHtml(username)}</p>
                            <div class="detail-user-badges">
                                <span class="badge badge-lang">${user.language_code || user.tg_language_code || '??'}</span>
                                <span class="badge badge-level">LVL ${user.user_lvl || 1}</span>
                                <span class="badge badge-credits">
                                    <i data-lucide="sparkles"></i>
                                    ${user.ai_credits} Credits
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="detail-user-right">
                        <span class="detail-user-id">TG ID: ${user.telegram_id || 'N/A'}</span>
                        <span style="font-size: 0.7rem; color: var(--text-muted);">Joined: ${formatDate(user.created_at)}</span>
                    </div>
                </div>

                <!-- Decks Section -->
                <div>
                    <div class="detail-section-title">
                        <i data-lucide="layers"></i>
                        Active Decks (${decks.length})
                    </div>
                    ${decksHtml}
                </div>

                <!-- Credits transactions -->
                <div>
                    <div class="detail-section-title">
                        <i data-lucide="sparkles"></i>
                        Recent Credit Activity
                    </div>
                    <div class="transactions-list">
                        ${txsHtml}
                    </div>
                </div>
            `;

            lucide.createIcons();
        }

        // Helpers
        function getStatusInfo(lastActivityDate) {
            if (!lastActivityDate) {
                return { class: 'inactive', text: 'Never studied' };
            }

            const diffTime = Math.abs(new Date() - new Date(lastActivityDate));
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

            if (diffDays <= 7) return { class: 'active', text: `${diffDays === 1 ? 'Yesterday' : `${diffDays} days ago`}` };
            if (diffDays <= 30) return { class: 'idle', text: `${diffDays} days ago` };
            return { class: 'inactive', text: `Inactive (${diffDays}d ago)` };
        }

        function showLoading(elementId, show) {
            const overlay = document.getElementById(elementId);
            if (show) overlay.classList.add('visible');
            else overlay.classList.remove('visible');
        }

        function formatNum(num) {
            if (num === null || num === undefined) return '0';
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function formatDate(dateStr) {
            if (!dateStr) return 'N/A';
            const date = new Date(dateStr);
            return date.toLocaleDateString(undefined, { year: 'numeric', month: 'short', day: 'numeric' });
        }

        function formatDateTime(dateStr) {
            if (!dateStr) return 'N/A';
            const date = new Date(dateStr);
            return date.toLocaleDateString(undefined, { month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit' });
        }

        function escapeHtml(unsafe) {
            if (!unsafe) return '';
            return unsafe
                 .replace(/&/g, "&amp;")
                 .replace(/</g, "&lt;")
                 .replace(/>/g, "&gt;")
                 .replace(/"/g, "&quot;")
                 .replace(/'/g, "&#039;");
        }
    </script>
</body>
</html>
