<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
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
        }

        .nav-links a {
            color: var(--muted);
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            padding: 10px 14px;
            border-radius: 999px;
        }

        .nav-links .active {
            background: var(--green-100);
            color: var(--green-950);
        }

        .container {
            max-width: 760px;
            margin: 0 auto;
            padding: 54px 24px 72px;
        }

        .heading {
            margin-bottom: 26px;
        }

        .heading small {
            color: var(--green-600);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .heading h1 {
            margin: 12px 0 0;
            font-size: clamp(38px, 5vw, 56px);
            line-height: 0.98;
            letter-spacing: -0.06em;
            color: var(--green-950);
        }

        .form-card {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 22px;
            box-shadow: var(--shadow);
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
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
            background: #f8fbf9;
            color: var(--text);
            border: 1px solid var(--line);
            border-radius: 12px;
            font-size: 15px;
            padding: 14px 16px;
            outline: none;
            transition: all 0.2s ease;
        }

        input:focus {
            border-color: var(--green-600);
            box-shadow: 0 0 0 4px rgba(29, 141, 94, 0.12);
            background: var(--white);
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 30px;
        }

        button,
        .cancel {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 0 22px;
            border: none;
            border-radius: 999px;
            font-size: 14px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
        }

        button {
            background: linear-gradient(135deg, var(--green-600), var(--green-700));
            color: var(--white);
            box-shadow: 0 12px 24px rgba(29, 141, 94, 0.23);
        }

        .cancel {
            background: var(--green-100);
            color: var(--green-950);
        }

        @media (max-width: 700px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
                padding: 18px 20px;
            }

            .container {
                padding: 40px 18px 56px;
            }

            .form-card {
                padding: 22px 18px;
            }
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="brand">User Portal</div>

    <div class="nav-links">
        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        <a href="<?= site_url('users') ?>" class="active">Users</a>
    </div>
</nav>

<main class="container">
    <div class="heading">
        <small>User management</small>
        <h1>Add User</h1>
    </div>

    <div class="form-card">
        <form method="POST" action="<?= site_url('users/create') ?>">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstname" required>
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastname" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="buttons">
                <button type="submit">Add User</button>
                <a class="cancel" href="<?= site_url('users') ?>">Cancel</a>
            </div>
        </form>
    </div>
</main>
</body>
</html>