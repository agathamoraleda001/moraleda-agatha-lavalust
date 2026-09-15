<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
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

        .container {
            max-width: 1120px;
            margin: 0 auto;
            padding: 48px 24px 72px;
        }

        .eyebrow {
            color: var(--green-600);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 {
            margin: 12px 0 28px;
            font-size: clamp(40px, 5vw, 62px);
            line-height: 0.98;
            letter-spacing: -0.06em;
            color: var(--green-950);
        }

        .profile {
            display: grid;
            grid-template-columns: 0.8fr 1.2fr;
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 24px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .intro {
            background: linear-gradient(180deg, #0d3d2c, #0a3025);
            color: var(--white);
            padding: 42px 32px;
            display: flex;
            align-items: flex-start;
            min-height: 420px;
        }

        .intro h2 {
            margin: 0;
            font-size: clamp(34px, 3vw, 48px);
            line-height: 1.05;
            letter-spacing: -0.06em;
            font-weight: 800;
        }

        .details {
            padding: 30px 28px;
        }

        .info {
            display: grid;
            grid-template-columns: 180px 1fr;
            gap: 16px;
            padding: 16px 0;
            border-bottom: 1px solid var(--line);
        }

        .info:last-child {
            border-bottom: none;
        }

        .label-info {
            color: var(--green-700);
            font-size: 12px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-weight: 800;
        }

        .value {
            color: var(--text);
            font-size: 15px;
            line-height: 1.7;
        }

        @media (max-width: 800px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
                padding: 18px 20px;
            }

            .profile {
                grid-template-columns: 1fr;
            }

            .info {
                grid-template-columns: 1fr;
                gap: 8px;
            }
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="brand">Student Portal</div>

    <div class="nav-links">
        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>" class="active">Student Profile</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </div>
</nav>

<main class="container">
    <div class="eyebrow">Personal information</div>
    <h1>My Profile</h1>

    <div class="profile">
        <div class="intro">
            <h2>Hello,<br>Agatha.</h2>
        </div>

        <div class="details">
            <div class="info">
                <div class="label-info">Student ID</div>
                <div class="value"><?= $student_id ?></div>
            </div>

            <div class="info">
                <div class="label-info">Name</div>
                <div class="value"><?= $name ?></div>
            </div>

            <div class="info">
                <div class="label-info">Course</div>
                <div class="value"><?= $course ?></div>
            </div>

            <div class="info">
                <div class="label-info">Year Level</div>
                <div class="value"><?= $year ?></div>
            </div>

            <div class="info">
                <div class="label-info">Section</div>
                <div class="value"><?= $section ?></div>
            </div>

            <div class="info">
                <div class="label-info">Email</div>
                <div class="value"><?= $email ?></div>
            </div>

            <div class="info">
                <div class="label-info">Hobby</div>
                <div class="value"><?= $hobby ?></div>
            </div>

            <div class="info">
                <div class="label-info">Description</div>
                <div class="value"><?= $description ?></div>
            </div>
        </div>
    </div>
</main>
</body>
</html>