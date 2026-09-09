<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agatha's User Directory</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f4f8f5;
            color: #354b3d;
        }

        /* MAIN LAYOUT */

        .layout {
            min-height: 100vh;
            display: flex;
        }

        /* SIDEBAR */

        .sidebar {
            width: 240px;
            background: #245c3a;
            color: white;
            padding: 35px 20px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
        }

        .logo {
            text-align: center;
            font-size: 21px;
            font-weight: 700;
            margin-bottom: 45px;
        }

        .logo span {
            color: #9ed5ae;
        }

        .menu-title {
            font-size: 11px;
            color: #b9d5c1;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0 15px 12px;
        }

        .menu a {
            display: block;
            padding: 13px 15px;
            margin-bottom: 8px;

            color: #dcece1;
            text-decoration: none;

            font-size: 14px;
            font-weight: 500;

            border-radius: 9px;

            transition: 0.2s ease;
        }

        .menu a:hover,
        .menu a.active {
            background: #3d8558;
            color: white;
        }

        .sidebar-footer {
            position: absolute;
            bottom: 30px;
            left: 20px;
            right: 20px;

            padding: 15px;

            background: rgba(255,255,255,0.08);
            border-radius: 10px;

            text-align: center;

            font-size: 12px;
            color: #cce1d2;
        }

        /* CONTENT */

        .content {
            margin-left: 240px;
            width: calc(100% - 240px);
            padding: 35px 45px;
        }

        /* TOP BAR */

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .page-title {
            margin: 0;
            font-size: 15px;
            color: #708176;
        }

        .student-name {
            font-size: 14px;
            font-weight: 600;
            color: #245c3a;
        }

        /* HEADER CARD */

        .directory-header {
            background: linear-gradient(
                135deg,
                #ffffff 0%,
                #edf7f0 100%
            );

            border: 1px solid #d8e8dc;
            border-radius: 20px;

            padding: 30px 35px;

            margin-bottom: 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            box-shadow:
                0 12px 35px rgba(41, 84, 56, 0.08);
        }

        .header-text {
            position: relative;
            z-index: 2;
        }

        .header-label {
            color: #4f9d69;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .header-text h1 {
            margin: 8px 0 5px;
            font-size: 32px;
            color: #245c3a;
        }

        .header-text p {
            margin: 0;
            color: #687a6e;
            font-size: 14px;
        }

        .header-icon {
            width: 80px;
            height: 80px;

            background: #d9edde;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 35px;
        }

        /* TABLE CARD */

        .table-card {
            background: white;
            padding: 30px;

            border-radius: 18px;

            border: 1px solid #dce9df;

            box-shadow:
                0 7px 20px rgba(41, 84, 56, 0.06);

            overflow-x: auto;
        }

        .table-title {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 20px;
        }

        .table-title h2 {
            margin: 0;
            font-size: 18px;
            color: #245c3a;
        }

        .table-title span {
            font-size: 12px;
            color: #77857c;
        }

        /* TABLE */

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 750px;
        }

        th {
            padding: 14px 15px;

            background: #245c3a;
            color: white;

            text-align: left;

            font-size: 13px;
            font-weight: 600;
        }

        th:first-child {
            border-radius: 9px 0 0 9px;
        }

        th:last-child {
            border-radius: 0 9px 9px 0;
        }

        td {
            padding: 15px;

            border-bottom: 1px solid #e3ece5;

            color: #596b60;

            font-size: 13px;
        }

        tr {
            transition: 0.2s ease;
        }

        tr:hover td {
            background: #f1f8f3;
        }

        tr:last-child td {
            border-bottom: none;
        }

        /* ID */

        .id-badge {
            display: inline-block;

            padding: 5px 10px;

            background: #edf7f0;

            color: #2e7d4f;

            border-radius: 7px;

            font-size: 12px;

            font-weight: 600;
        }

        /* USERNAME */

        .username {
            color: #2e7d4f;
            font-weight: 600;
        }

        /* MOBILE */

        @media (max-width: 800px) {

            .sidebar {
                width: 190px;
            }

            .content {
                margin-left: 190px;
                width: calc(100% - 190px);
                padding: 25px;
            }

            .directory-header {
                padding: 25px;
            }

            .header-text h1 {
                font-size: 27px;
            }

            .table-card {
                padding: 20px;
            }
        }

        @media (max-width: 600px) {

            .layout {
                display: block;
            }

            .sidebar {
                position: relative;

                width: 100%;

                padding: 20px;

                height: auto;
            }

            .logo {
                margin-bottom: 20px;
            }

            .menu {
                display: flex;
                justify-content: center;
                gap: 5px;
            }

            .menu a {
                margin: 0;
            }

            .menu-title,
            .sidebar-footer {
                display: none;
            }

            .content {
                margin-left: 0;
                width: 100%;
                padding: 20px;
            }

            .topbar {
                margin-bottom: 20px;
            }

            .directory-header {
                text-align: center;

                flex-direction: column;

                padding: 30px 20px;
            }

            .header-icon {
                order: -1;
                margin-bottom: 15px;
            }

            .header-text h1 {
                font-size: 25px;
            }

            .table-card {
                padding: 15px;
            }
        }

    </style>

</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->

    <aside class="sidebar">

        <div class="logo">
            Student<span>Portal</span>
        </div>

        <div class="menu-title">
            Navigation
        </div>

        <div class="menu">

            <a href="<?= site_url('student') ?>">
                🏠 &nbsp; Home
            </a>

            <a href="<?= site_url('student/profile') ?>">
                👤 &nbsp; Student Profile
            </a>

            <a class="active" href="#">
                📋 &nbsp; User Directory
            </a>

        </div>

        <div class="sidebar-footer">
            Student Information System
        </div>

    </aside>


    <!-- MAIN CONTENT -->

    <main class="content">

        <!-- TOP BAR -->

        <div class="topbar">

            <div class="page-title">
                Student Dashboard
            </div>

            <div class="student-name">
                Agatha's Portal
            </div>

        </div>


        <!-- DIRECTORY HEADER -->

        <section class="directory-header">

            <div class="header-text">

                <div class="header-label">
                    Student Information System
                </div>

                <h1>
                    User Directory
                </h1>

                <p>
                    View and manage the registered users in the system.
                </p>

            </div>

            <div class="header-icon">
                👥
            </div>

        </section>


        <!-- TABLE -->

        <section class="table-card">

            <div class="table-title">

                <h2>
                    Registered Users
                </h2>

                <span>
                    User Information
                </span>

            </div>

            <table>

                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>

                <?php foreach ($users as $user): ?>

                <tr>

                    <td>
                        <span class="id-badge">
                            #<?= $user['id']; ?>
                        </span>
                    </td>

                    <td>
                        <?= $user['firstname']; ?>
                    </td>

                    <td>
                        <?= $user['lastname']; ?>
                    </td>

                    <td>
                        <?= $user['email']; ?>
                    </td>

                    <td>
                        <span class="username">
                            <?= $user['username']; ?>
                        </span>
                    </td>

                </tr>

                <?php endforeach; ?>

            </table>

        </section>

    </main>

</div>

</body>

</html>