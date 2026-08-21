<!DOCTYPE html>
<html>
<head>
    <title><?= $page_title ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f2f4f3;
            color: #1f2d24;
        }

        nav {
            background: #123524;
            padding: 16px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .brand {
            color: #ffffff;
            font-size: 17px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        nav a {
            color: #d7e4da;
            text-decoration: none;
            margin-left: 24px;
            font-size: 14px;
        }

        nav a:hover {
            color: #ffffff;
        }

        .dashboard {
            max-width: 700px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .welcome-card {
            background: #ffffff;
            border: 1px solid #e0e5e1;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
        }

        .welcome-card h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .welcome-card p {
            font-size: 14px;
            color: #5c6b60;
            margin-bottom: 24px;
        }

        .welcome-card a.btn {
            display: inline-block;
            padding: 10px 24px;
            background: #123524;
            color: #ffffff;
            text-decoration: none;
            font-size: 13px;
            border-radius: 4px;
        }

        footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #8a9a90;
        }
    </style>
</head>
<body>

<nav>
    <span class="brand">Student Portal</span>
    <div>
        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </div>
</nav>

<div class="dashboard">
    <div class="welcome-card">
        <h1>Welcome back!</h1>
        <p>This is your student information dashboard. Use the link below to view or update your profile.</p>
        <a class="btn" href="<?= site_url('student/profile') ?>">View Profile</a>
    </div>
</div>

<footer>&copy; <?= date('Y') ?> Agatha Dominique N. Moraleda &middot; BSIT 3-F6</footer>

</body>
</html>