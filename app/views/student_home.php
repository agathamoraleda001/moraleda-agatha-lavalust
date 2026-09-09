<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>

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

            margin-bottom: 35px;
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

        /* WELCOME CARD */

        .welcome-card {
            min-height: 330px;

            background: linear-gradient(
                135deg,
                #ffffff 0%,
                #edf7f0 100%
            );

            border: 1px solid #d8e8dc;

            border-radius: 20px;

            padding: 50px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            overflow: hidden;

            position: relative;

            box-shadow:
                0 12px 35px rgba(41, 84, 56, 0.08);
        }

        .welcome-text {
            max-width: 600px;
            position: relative;
            z-index: 2;
        }

        .welcome-label {
            color: #4f9d69;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        h1 {
            margin: 12px 0 15px;

            font-size: 42px;

            line-height: 1.2;

            color: #245c3a;
        }

        .welcome-text p {
            color: #687a6e;

            font-size: 16px;

            line-height: 1.7;

            margin-bottom: 30px;
        }

        /* BUTTON */

        .btn {
            display: inline-block;

            padding: 13px 25px;

            background: #2e7d4f;

            color: white;

            text-decoration: none;

            border-radius: 9px;

            font-size: 14px;

            font-weight: 600;

            transition: 0.25s ease;

            box-shadow: 0 6px 15px rgba(46, 125, 79, 0.20);
        }

        .btn:hover {
            background: #245c3a;

            transform: translateY(-3px);

            box-shadow: 0 9px 20px rgba(46, 125, 79, 0.28);
        }

        /* DECORATIVE CIRCLE */

        .welcome-decoration {
            width: 220px;
            height: 220px;

            background: #d9edde;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 90px;

            margin-right: 30px;

            position: relative;
        }

        .welcome-decoration::before {
            content: "";

            position: absolute;

            width: 270px;
            height: 270px;

            border: 2px solid #c7e1cf;

            border-radius: 50%;
        }

        /* INFO CARDS */

        .cards {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;

            margin-top: 25px;
        }

        .card {
            background: white;

            padding: 25px;

            border-radius: 15px;

            border: 1px solid #dce9df;

            box-shadow: 0 7px 20px rgba(41, 84, 56, 0.06);
        }

        .card-icon {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #edf7f0;

            border-radius: 9px;

            font-size: 20px;

            margin-bottom: 15px;
        }

        .card h3 {
            margin: 0 0 7px;

            font-size: 15px;

            color: #245c3a;
        }

        .card p {
            margin: 0;

            color: #77857c;

            font-size: 13px;

            line-height: 1.5;
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

            .welcome-card {
                padding: 35px;
            }

            .welcome-decoration {
                width: 150px;
                height: 150px;

                font-size: 60px;

                margin-right: 0;
            }

            h1 {
                font-size: 32px;
            }

            .cards {
                grid-template-columns: 1fr;
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

            .welcome-card {
                flex-direction: column;

                text-align: center;

                padding: 35px 25px;
            }

            .welcome-decoration {
                order: -1;

                width: 120px;
                height: 120px;

                font-size: 50px;

                margin-bottom: 25px;
            }

            .welcome-decoration::before {
                width: 150px;
                height: 150px;
            }

            h1 {
                font-size: 28px;
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

    <a class="active" href="<?= site_url('student') ?>">
        🏠 &nbsp; Home
    </a>

    <a href="<?= site_url('student/profile') ?>">
        👤 &nbsp; Student Profile
    </a>

    <a href="<?= site_url('users') ?>">
        👥 &nbsp; Users
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


        <!-- WELCOME -->

        <section class="welcome-card">


            <div class="welcome-text">

                <div class="welcome-label">
                    Welcome to the Student Portal
                </div>


                <h1>
                    Student Information Page
                </h1>


                <p>
                    A simple LavaLust application demonstrating
                    routing, controllers, views, and middleware.
                    Access your student information and profile
                    through the portal.
                </p>


                <a class="btn" href="<?= site_url('student/profile') ?>">
                    View My Profile →
                </a>

            </div>


            <div class="welcome-decoration">
                👩‍🎓
            </div>


        </section>


        <!-- INFORMATION CARDS -->

        <div class="cards">


            <div class="card">

                <div class="card-icon">
                    🎓
                </div>

                <h3>
                    Student Profile
                </h3>

                <p>
                    View your personal and academic information.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">
                    📚
                </div>

                <h3>
                    Academic Information
                </h3>

                <p>
                    Access your course, year level, and section details.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">
                    🔒
                </div>

                <h3>
                    Secure Access
                </h3>

                <p>
                    Your student information is displayed through the
                    application portal.
                </p>

            </div>


        </div>


    </main>


</div>


</body>

</html>