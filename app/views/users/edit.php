<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f1f8f4;
        }

        .container {
            width: 600px;
            margin: 50px auto;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        h1 {
            color: #198754;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
        }

        .buttons {
            margin-top: 25px;
            display: flex;
            gap: 10px;
        }

        button,
        a {
            padding: 11px 20px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
        }

        button {
            background: #198754;
            color: white;
        }

        .cancel {
            background: #6c757d;
            color: white;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Edit User</h1>

    <form method="POST" action="<?= site_url('users/edit/' . $user['id']) ?>">

        <label>First Name</label>
        <input
            type="text"
            name="firstname"
            value="<?= html_escape($user['firstname']) ?>"
            required
        >

        <label>Last Name</label>
        <input
            type="text"
            name="lastname"
            value="<?= html_escape($user['lastname']) ?>"
            required
        >

        <label>Email</label>
        <input
            type="email"
            name="email"
            value="<?= html_escape($user['email']) ?>"
            required
        >

        <label>Username</label>
        <input
            type="text"
            name="username"
            value="<?= html_escape($user['username']) ?>"
            required
        >

        <div class="buttons">

            <button type="submit">
                Update User
            </button>

            <a href="<?= site_url('users') ?>" class="cancel">
                Cancel
            </a>

        </div>

    </form>

</div>

</body>
</html>