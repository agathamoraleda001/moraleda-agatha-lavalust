<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LavaLust | Login</title>
    <style>
        :root {
            --green-950: #062d1f;
            --green-900: #0d3d2c;
            --green-700: #156c46;
            --green-600: #1d8d5e;
            --green-500: #2bb875;
            --green-100: #e5f9ee;
            --green-50: #f5fcf8;
            --white: #ffffff;
            --text: #173d2b;
            --muted: #587266;
            --line: #dfeee6;
            --shadow: 0 22px 54px rgba(8, 47, 32, 0.08);
            --danger: #b42318;
            --danger-bg: #fff1f1;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #eefaf3 0%, #f9fdfb 35%, #edf7f0 100%);
            color: var(--text);
        }

        .page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px;
        }

        .login-shell {
            width: min(1180px, 100%);
            min-height: 760px;
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            background: rgba(255,255,255,0.5);
            border: 1px solid rgba(20,108,69,0.08);
            border-radius: 28px;
            overflow: hidden;
            box-shadow: var(--shadow);
            backdrop-filter: blur(8px);
        }

        .brand-panel {
            position: relative;
            padding: 46px 52px;
            background: linear-gradient(135deg, rgba(13, 61, 44, 0.96), rgba(17, 86, 57, 0.92));
            color: var(--white);
        }

        .brand-panel::before, .brand-panel::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,0.06);
        }

        .brand-panel::before {
            width: 420px;
            height: 420px;
            top: -130px;
            right: -120px;
        }

        .brand-panel::after {
            width: 280px;
            height: 280px;
            left: -70px;
            bottom: -70px;
        }

        .brand-top, .brand-copy, .mini-cards {
            position: relative;
            z-index: 1;
        }

        .brand-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-mark {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 15px;
            font-weight: 800;
        }

        .brand-mark .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: linear-gradient(135deg, #86efac, #36c277);
            box-shadow: 0 0 18px rgba(134,239,172,0.9);
        }

        .brand-link {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
        }

        .brand-copy {
            margin-top: 120px;
            max-width: 430px;
        }

        .eyebrow {
            display: inline-block;
            padding: 7px 12px;
            border: 1px solid rgba(255,255,255,0.18);
            background: rgba(255,255,255,0.04);
            border-radius: 999px;
            color: #d6f8e3;
            text-transform: uppercase;
            letter-spacing: 1.8px;
            font-size: 11px;
            font-weight: 700;
        }

        h1 {
            margin: 24px 0 18px;
            font-size: clamp(48px, 4vw, 72px);
            line-height: 0.95;
            letter-spacing: -3px;
            font-weight: 800;
        }

        h1 span {
            color: #7fe8b1;
        }

        .description {
            margin: 0;
            max-width: 440px;
            color: rgba(255,255,255,0.8);
            line-height: 1.8;
            font-size: 16px;
        }

        .mini-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
            margin-top: 58px;
        }

        .mini-card {
            min-width: 150px;
            padding: 18px 18px;
            border-radius: 18px;
            border: 1px solid rgba(255,255,255,0.12);
            background: rgba(255,255,255,0.04);
        }

        .mini-card strong {
            display: block;
            font-size: 22px;
            margin-bottom: 7px;
        }

        .mini-card span {
            font-size: 12px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.72);
        }

        .login-panel {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 34px;
            background: rgba(255,255,255,0.82);
        }

        .login-card {
            width: min(100%, 430px);
            background: var(--white);
            border-radius: 24px;
            border: 1px solid var(--line);
            padding: 32px 28px;
            box-shadow: 0 18px 42px rgba(10,52,35,0.08);
        }

        .login-header {
            margin-bottom: 28px;
        }

        .login-header h2 {
            margin: 0 0 8px;
            font-size: 32px;
            line-height: 1.1;
            color: var(--green-950);
        }

        .login-header p {
            margin: 0;
            font-size: 14px;
            color: var(--muted);
        }

        .error {
            margin-bottom: 20px;
            padding: 12px 14px;
            border: 1px solid rgba(180,35,24,0.14);
            background: var(--danger-bg);
            color: var(--danger);
            border-radius: 12px;
            font-size: 13px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--green-900);
        }

        input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid var(--line);
            border-radius: 12px;
            background: #f8fbf9;
            color: var(--text);
            font-size: 15px;
            outline: none;
            transition: all 0.2s ease;
        }

        input:focus {
            border-color: var(--green-600);
            box-shadow: 0 0 0 4px rgba(26,143,92,0.12);
            background: var(--white);
        }

        .button {
            width: 100%;
            margin-top: 8px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--green-600), var(--green-700));
            color: var(--white);
            padding: 15px 18px;
            font-size: 15px;
            font-weight: 800;
            cursor: pointer;
            box-shadow: 0 14px 26px rgba(26,143,92,0.24);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .button:hover {
            transform: translateY(-1px);
            box-shadow: 0 18px 30px rgba(26,143,92,0.28);
        }

        .demo-account {
            margin-top: 24px;
            padding: 16px 18px;
            border-radius: 12px;
            background: linear-gradient(135deg, #eefcf3, #f6fbf8);
            border: 1px solid #d7f2e3;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
        }

        .demo-account strong {
            color: var(--green-900);
        }

        @media (max-width: 980px) {
            .login-shell {
                grid-template-columns: 1fr;
                min-height: auto;
            }

            .brand-panel {
                padding-bottom: 42px;
            }

            .brand-copy {
                margin-top: 72px;
            }
        }

        @media (max-width: 560px) {
            .page {
                padding: 20px;
            }

            .brand-panel, .login-panel {
                padding: 24px 18px;
            }

            .login-card {
                padding: 24px 18px;
            }
        }
    </style>
</head>
<body>
<div class="page">
    <main class="login-shell">
        <section class="brand-panel">
            <div class="brand-top">
                <div class="brand-mark">
                    <span class="dot"></span>
                    LavaLust
                </div>
                <a class="brand-link" href="#">Overview</a>
            </div>

            <div class="brand-copy">
                <div class="eyebrow">Welcome back</div>
                <h1>Log in to your <span>workspace</span>.</h1>
                <p class="description">A clean, modern platform for managing products, users, and daily operations in one elegant place.</p>
            </div>

            <div class="mini-cards">
                <div class="mini-card">
                    <strong>24/7</strong>
                    <span>Access</span>
                </div>
                <div class="mini-card">
                    <strong>12k+</strong>
                    <span>Records</span>
                </div>
            </div>
        </section>

        <section class="login-panel">
            <div class="login-card">
                <div class="login-header">
                    <h2>Sign in</h2>
                    <p>Use your account credentials below.</p>
                </div>

                <?php if (isset($error)): ?>
                    <div class="error">
                        <?= htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="<?= site_url('login'); ?>">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter password" required>
                    </div>

                    <button class="button" type="submit">Login</button>
                </form>

                <div class="demo-account">
                    <strong>Laboratory Demo Account</strong><br>
                    Username: admin<br>
                    Password: admin123
                </div>
            </div>
        </section>
    </main>
</div>
</body>
</html>
