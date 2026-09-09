<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Directory</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f8f5;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .header h1 {
            color: #198754;
            font-size: 28px;
        }

        .add-btn {
            background: #198754;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
        }

        .add-btn:hover {
            background: #146c43;
        }

        .table-container {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #198754;
            color: white;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f8f9fa;
        }

        .edit-btn,
        .delete-btn {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 6px;
            text-decoration: none;
            color: white;
            font-size: 13px;
            margin-right: 5px;
        }

        .edit-btn {
            background: #0d6efd;
        }

        .delete-btn {
            background: #dc3545;
        }

        .edit-btn:hover {
            background: #0b5ed7;
        }

        .delete-btn:hover {
            background: #bb2d3b;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #777;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="header">

        <h1>📋 User Directory</h1>

        <a href="<?= site_url('users/create') ?>" class="add-btn">
            + Add User
        </a>

    </div>


    <div class="table-container">

        <table>

            <thead>

                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

            </thead>

            <tbody>

            <?php if (!empty($users)): ?>

                <?php foreach ($users as $user): ?>

                    <tr>

                        <td>
                            <?= html_escape($user['id']) ?>
                        </td>

                        <td>
                            <?= html_escape($user['firstname']) ?>
                        </td>

                        <td>
                            <?= html_escape($user['lastname']) ?>
                        </td>

                        <td>
                            <?= html_escape($user['email']) ?>
                        </td>

                        <td>
                            <?= html_escape($user['username']) ?>
                        </td>

                        <td>

                            <a
                                href="<?= site_url('users/edit/' . $user['id']) ?>"
                                class="edit-btn">
                                Edit
                            </a>

                            <a
                                href="<?= site_url('users/delete/' . $user['id']) ?>"
                                class="delete-btn"
                                onclick="return confirm('Are you sure you want to delete this user?');">
                                Delete
                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

            <?php else: ?>

                <tr>

                    <td colspan="6" class="empty">
                        No users found.
                    </td>

                </tr>

            <?php endif; ?>

            </tbody>

        </table>

    </div>

</div>

</body>

</html>