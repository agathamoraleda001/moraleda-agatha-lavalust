<!DOCTYPE html>
<html>
<head>
    <title><?= $page_title ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            background: #f6f8f6;
            color: #14301f;
        }

        nav {
            background: #123524;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .brand {
            color: #ffffff;
            font-size: 18px;
            letter-spacing: 1px;
        }

        nav a {
            color: #d7e4da;
            text-decoration: none;
            margin-left: 28px;
            font-size: 14px;
            letter-spacing: 0.5px;
            border-bottom: 1px solid transparent;
            padding-bottom: 3px;
            transition: 0.2s;
        }

        nav a:hover {
            color: #ffffff;
            border-bottom: 1px solid #ffffff;
        }

        .wrap {
            max-width: 620px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .card {
            background: #ffffff;
            border: 1px solid #dbe4de;
            border-radius: 6px;
            overflow: hidden;
        }

        .card-top {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 34px 36px;
            border-bottom: 1px solid #e4ebe6;
        }

        .monogram {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            border: 1.5px solid #123524;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: #123524;
            letter-spacing: 1px;
            flex-shrink: 0;
        }

        .card-top h1 {
            font-size: 21px;
            font-weight: 400;
            margin-bottom: 4px;
        }

        .card-top span {
            font-size: 13px;
            color: #6d8074;
            letter-spacing: 0.5px;
        }

        .details {
            padding: 10px 36px 30px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #edf1ee;
        }

        .row:last-child { border-bottom: none; }

        .label {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #6d8074;
        }

        .value {
            font-size: 15px;
            color: #14301f;
            text-align: right;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 26px;
            font-size: 13px;
            color: #123524;
            text-decoration: none;
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

<div class="wrap">
    <div class="card">
        <div class="card-top">
            <div class="monogram">ADM</div>
            <div>
                <h1><?= $name ?></h1>
                <span>Verified Student Record</span>
            </div>
        </div>
        <div class="details">
            <div class="row">
                <span class="label">Student ID</span>
                <span class="value"><?= $student_id ?></span>
            </div>
            <div class="row">
                <span class="label">Course</span>
                <span class="value"><?= $course ?></span>
            </div>
            <div class="row">
                <span class="label">Year Level</span>
                <span class="value"><?= $year ?></span>
            </div>
            <div class="row">
                <span class="label">Section</span>
                <span class="value"><?= $section ?></span>
            </div>
            <div class="row">
                <span class="label">Email</span>
                <span class="value"><?= $email ?></span>
            </div>
            <div class="row">
                <span class="label">Contact No.</span>
                <span class="value"><?= $contact ?? '' ?></span>
            </div>
        </div>
    </div>
    <a class="back" href="<?= site_url('student') ?>">&larr; Back to Home</a>
</div>

</body>
</html>