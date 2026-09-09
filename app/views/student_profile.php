<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agatha's Student Profile</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f4f7f5;
            color: #34483b;
        }

        /* PAGE */
        .page {
            min-height: 100vh;
            padding: 35px 20px;
        }

        /* NAVBAR */
        .navbar {
            max-width: 1050px;
            margin: 0 auto 25px;

            background: white;
            border: 1px solid #dfe9e2;
            border-radius: 14px;

            padding: 16px 25px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            box-shadow: 0 5px 20px rgba(35, 75, 50, 0.06);
        }

        .logo {
            font-size: 19px;
            font-weight: 700;
            color: #23613c;
        }

        nav a {
            text-decoration: none;
            color: #63766a;

            font-size: 14px;
            font-weight: 500;

            margin-left: 25px;

            transition: 0.2s;
        }

        nav a:hover {
            color: #2e7d4f;
        }

        nav a.active {
            color: #2e7d4f;
            font-weight: 700;
        }

        /* MAIN CARD */
        .profile-container {
            max-width: 1050px;
            margin: auto;

            background: white;

            border: 1px solid #dfe9e2;
            border-radius: 20px;

            overflow: hidden;

            box-shadow: 0 15px 40px rgba(35, 75, 50, 0.09);
        }

        /* TOP BANNER */
        .top-banner {
            height: 120px;

            background: linear-gradient(
                135deg,
                #246b42,
                #5aa473
            );
        }

        /* PROFILE LAYOUT */
        .profile-layout {
            display: grid;
            grid-template-columns: 300px 1fr;
        }

        /* LEFT PROFILE */
        .profile-side {
            padding: 0 30px 35px;

            border-right: 1px solid #e2ebe5;

            text-align: center;

            background: #fbfdfb;
        }

        .profile-picture {
            width: 120px;
            height: 120px;

            margin: -60px auto 18px;

            background: white;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 52px;

            border: 6px solid white;

            box-shadow: 0 5px 20px rgba(35, 75, 50, 0.15);
        }

        .profile-side h1 {
            margin: 5px 0;

            color: #245d3a;

            font-size: 23px;
            font-weight: 700;
        }

        .profile-side .student-label {
            margin: 0 0 20px;

            color: #7a8b81;

            font-size: 13px;
        }

        .student-id {
            display: inline-block;

            padding: 8px 18px;

            background: #edf7f0;

            border: 1px solid #d1e6d6;

            border-radius: 30px;

            color: #2e7d4f;

            font-size: 13px;
            font-weight: 600;
        }

        /* QUICK INFO */
        .quick-info {
            margin-top: 30px;

            text-align: left;
        }

        .quick-item {
            padding: 13px 0;

            border-bottom: 1px solid #e4ebe6;
        }

        .quick-item:last-child {
            border-bottom: none;
        }

        .quick-label {
            display: block;

            color: #89988f;

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: 0.6px;

            margin-bottom: 3px;
        }

        .quick-value {
            color: #405449;

            font-size: 13px;

            font-weight: 600;
        }

        /* RIGHT CONTENT */
        .profile-content {
            padding: 35px;
        }

        .welcome {
            margin-bottom: 30px;
        }

        .welcome h2 {
            margin: 0 0 5px;

            color: #245d3a;

            font-size: 24px;
        }

        .welcome p {
            margin: 0;

            color: #78877e;

            font-size: 13px;
        }

        /* SECTION */
        .section {
            margin-bottom: 28px;
        }

        .section-title {
            display: flex;
            align-items: center;

            gap: 10px;

            margin-bottom: 15px;

            color: #245d3a;

            font-size: 17px;

            font-weight: 700;
        }

        .section-title::before {
            content: "";

            width: 5px;
            height: 20px;

            background: #4f9d69;

            border-radius: 5px;
        }

        /* INFORMATION CARDS */
        .info-grid {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 13px;
        }

        .info-card {
            padding: 16px;

            background: #f8faf8;

            border: 1px solid #e1ebe4;

            border-radius: 11px;

            transition: 0.2s;
        }

        .info-card:hover {
            background: #f0f8f2;

            border-color: #c9dfcf;

            transform: translateY(-2px);
        }

        .info-label {
            display: block;

            margin-bottom: 5px;

            color: #8a998f;

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: 0.5px;
        }

        .info-value {
            color: #3d5145;

            font-size: 14px;

            font-weight: 600;

            word-break: break-word;
        }

        /* INTEREST */
        .interest-box {
            display: inline-block;

            padding: 9px 18px;

            background: #edf7f0;

            border: 1px solid #cfe4d5;

            border-radius: 30px;

            color: #2e7d4f;

            font-size: 13px;

            font-weight: 600;
        }

        /* ABOUT */
        .about-box {
            padding: 18px;

            background: #f8faf8;

            border: 1px solid #e1ebe4;

            border-radius: 11px;

            color: #64746a;

            font-size: 13px;

            line-height: 1.7;
        }

        /* VERIFIED */
        .verified {
            margin-top: 25px;

            padding: 13px;

            text-align: center;

            background: #f1f7f3;

            border: 1px solid #d7e7dc;

            border-radius: 10px;

            color: #2e7d4f;

            font-size: 12px;

            font-weight: 600;
        }

        /* MOBILE */
        @media (max-width: 750px) {

            .page {
                padding: 20px 12px;
            }

            .navbar {
                flex-direction: column;
                gap: 10px;
            }

            nav a {
                margin: 0 8px;
                font-size: 13px;
            }

            .top-banner {
                height: 100px;
            }

            .profile-layout {
                grid-template-columns: 1fr;
            }

            .profile-side {
                border-right: none;

                border-bottom: 1px solid #e2ebe5;

                padding-bottom: 30px;
            }

            .profile-content {
                padding: 25px 20px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .welcome h2 {
                font-size: 21px;
            }
        }

    </style>

</head>

<body>

<div class="page">

    <!-- NAVIGATION -->
    <div class="navbar">

        <div class="logo">
            Student Portal
        </div>

        <nav>

            <a href="<?= site_url('student') ?>">
                Home
            </a>

            <a class="active" href="<?= site_url('student/profile') ?>">
                Student Profile
            </a>

        </nav>

    </div>


    <!-- PROFILE CONTAINER -->
    <div class="profile-container">

        <!-- GREEN BANNER -->
        <div class="top-banner"></div>


        <!-- PROFILE LAYOUT -->
        <div class="profile-layout">


            <!-- LEFT PROFILE PANEL -->
            <div class="profile-side">

                <div class="profile-picture">
                    👩‍🎓
                </div>

                <h1>
                    <?= $name ?>
                </h1>

                <p class="student-label">
                    Student Profile
                </p>

                <div class="student-id">
                    ID: <?= $student_id ?>
                </div>


                <!-- QUICK INFORMATION -->
                <div class="quick-info">

                    <div class="quick-item">

                        <span class="quick-label">
                            Course
                        </span>

                        <span class="quick-value">
                            <?= $course ?>
                        </span>

                    </div>


                    <div class="quick-item">

                        <span class="quick-label">
                            Year Level
                        </span>

                        <span class="quick-value">
                            <?= $year ?>
                        </span>

                    </div>


                    <div class="quick-item">

                        <span class="quick-label">
                            Section
                        </span>

                        <span class="quick-value">
                            <?= $section ?>
                        </span>

                    </div>


                    <div class="quick-item">

                        <span class="quick-label">
                            Email
                        </span>

                        <span class="quick-value">
                            <?= $email ?>
                        </span>

                    </div>

                </div>

            </div>


            <!-- RIGHT CONTENT -->
            <div class="profile-content">

                <div class="welcome">

                    <h2>
                        Student Information
                    </h2>

                    <p>
                        Here is your personal and academic information.
                    </p>

                </div>


                <!-- ACADEMIC INFORMATION -->
                <div class="section">

                    <div class="section-title">
                        Academic Information
                    </div>

                    <div class="info-grid">

                        <div class="info-card">

                            <span class="info-label">
                                Student ID
                            </span>

                            <span class="info-value">
                                <?= $student_id ?>
                            </span>

                        </div>


                        <div class="info-card">

                            <span class="info-label">
                                Course
                            </span>

                            <span class="info-value">
                                <?= $course ?>
                            </span>

                        </div>


                        <div class="info-card">

                            <span class="info-label">
                                Year Level
                            </span>

                            <span class="info-value">
                                <?= $year ?>
                            </span>

                        </div>


                        <div class="info-card">

                            <span class="info-label">
                                Section
                            </span>

                            <span class="info-value">
                                <?= $section ?>
                            </span>

                        </div>

                    </div>

                </div>


                <!-- CONTACT INFORMATION -->
                <div class="section">

                    <div class="section-title">
                        Contact Information
                    </div>

                    <div class="info-grid">

                        <div class="info-card">

                            <span class="info-label">
                                Full Name
                            </span>

                            <span class="info-value">
                                <?= $name ?>
                            </span>

                        </div>


                        <div class="info-card">

                            <span class="info-label">
                                Email Address
                            </span>

                            <span class="info-value">
                                <?= $email ?>
                            </span>

                        </div>

                    </div>

                </div>


                <!-- INTEREST -->
                <div class="section">

                    <div class="section-title">
                        Interests
                    </div>

                    <div class="interest-box">
                        <?= $hobby ?>
                    </div>

                </div>


                <!-- ABOUT ME -->
                <div class="section">

                    <div class="section-title">
                        About Me
                    </div>

                    <div class="about-box">
                        <?= $description ?>
                    </div>

                </div>


                <!-- VERIFIED -->
                <div class="verified">
                    ✓ Student profile verified
                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>