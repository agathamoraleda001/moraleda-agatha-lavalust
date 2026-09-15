<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        :root {
            --green-950: #062d1f;
            --green-900: #0c3d2e;
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
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(180deg, #f3fbf6 0%, #ffffff 42%);
            color: var(--text);
        }

        .navbar {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid var(--line);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 7%;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .brand {
            color: var(--green-950);
            font-size: 20px;
            font-weight: 800;
            letter-spacing: -0.04em;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: var(--muted);
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            padding: 10px 14px;
            border-radius: 999px;
            transition: all 0.2s ease;
        }

        .nav-links a:hover,
        .nav-links .active {
            background: var(--green-100);
            color: var(--green-950);
        }

        .hero {
            max-width: 1180px;
            margin: 0 auto;
            min-height: calc(100vh - 78px);
            padding: 72px 24px;
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 50px;
            align-items: center;
        }

        .eyebrow {
            display: inline-block;
            color: var(--green-600);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        h1 {
            margin: 0;
            font-size: clamp(52px, 6vw, 86px);
            line-height: 0.94;
            letter-spacing: -0.06em;
            color: var(--green-950);
        }

        h1 span {
            color: var(--green-600);
        }

        .description {
            max-width: 520px;
            margin-top: 22px;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.8;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 28px;
            min-height: 50px;
            padding: 0 24px;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--green-600), var(--green-700));
            color: var(--white);
            text-decoration: none;
            font-size: 14px;
            font-weight: 800;
            box-shadow: 0 12px 24px rgba(29, 141, 94, 0.25);
        }

        .visual-card {
            position: relative;
            min-height: 500px;
            border-radius: 28px;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(13, 61, 44, 0.96), rgba(17, 86, 57, 0.9));
            box-shadow: var(--shadow);
        }

        .visual-card::before,
        .visual-card::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
        }

        .visual-card::before {
            width: 420px;
            height: 420px;
            right: -100px;
            top: -110px;
        }

        .visual-card::after {
            width: 260px;
            height: 260px;
            left: -70px;
            bottom: -90px;
        }

        .circle {
            position: absolute;
            width: 260px;
            height: 260px;
            background: linear-gradient(135deg, #86efac, #36c277);
            border-radius: 50%;
            top: 90px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: 0 0 30px rgba(134, 239, 172, 0.5);
        }

        .square {
            position: absolute;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.12);
            right: 46px;
            bottom: 46px;
            transform: rotate(45deg);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .badge {
            position: absolute;
            left: 32px;
            bottom: 32px;
            padding: 10px 16px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.04);
            color: rgba(255, 255, 255, 0.8);
            font-size: 12px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        @media (max-width: 800px) {
            .navbar {
                padding: 18px 20px;
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 40px 20px 62px;
            }

            .visual-card {
                min-height: 360px;
            }
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="brand">Student Portal</div>

    <div class="nav-links">
        <a href="<?= site_url('student') ?>" class="active">Home</a>
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </div>
</nav>

<main class="hero">
    <div>
        <div class="eyebrow">Student information</div>
        <h1>Welcome to your <span>student portal</span>.</h1>
        <p class="description">Your academic dashboard is ready. Review your profile and keep track of your student details in one clean, modern space.</p>
        <a class="button" href="<?= site_url('student/profile') ?>">View My Profile</a>
    </div>

    <div class="visual-card">
        <div class="circle"></div>
        <div class="square"></div>
        <div class="badge">Student hub</div>
    </div>
</main>
</body>
</html>