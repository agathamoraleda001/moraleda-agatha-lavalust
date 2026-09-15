<?php
$products = $products ?? [];
$totalProducts = count($products);
$availableStock = 0;
$inventoryValue = 0.0;

foreach ($products as $product) {
    $availableStock += (int) ($product['quantity'] ?? 0);
    $inventoryValue += ((float) ($product['price'] ?? 0)) * (int) ($product['quantity'] ?? 0);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Directory</title>
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
            --danger: #b42318;
            --danger-bg: #fff1f1;
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

        .nav-links .logout {
            background: var(--danger-bg);
            color: var(--danger);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 48px 24px 72px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 18px;
            margin-bottom: 26px;
        }

        .eyebrow {
            color: var(--green-600);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 {
            margin: 12px 0 0;
            font-size: clamp(40px, 5vw, 62px);
            line-height: 0.98;
            letter-spacing: -0.06em;
            color: var(--green-950);
        }

        h1 span {
            color: var(--green-600);
        }

        .add-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 0 22px;
            border: none;
            border-radius: 999px;
            text-decoration: none;
            background: linear-gradient(135deg, var(--green-600), var(--green-700));
            color: var(--white);
            font-size: 14px;
            font-weight: 800;
            box-shadow: 0 12px 24px rgba(29, 141, 94, 0.25);
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(180px, 1fr));
            gap: 18px;
            margin-bottom: 24px;
        }

        .stat-card {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 18px;
            box-shadow: var(--shadow);
            padding: 22px 20px;
        }

        .stat-card small {
            display: block;
            margin-bottom: 10px;
            color: var(--muted);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .stat-card strong {
            font-size: 28px;
            letter-spacing: -0.05em;
            color: var(--green-950);
        }

        .table-wrapper {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 20px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 860px;
        }

        th {
            text-align: left;
            padding: 18px 18px;
            background: linear-gradient(180deg, #0d3d2e, #0a3025);
            color: var(--white);
            font-size: 12px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        td {
            border-bottom: 1px solid var(--line);
            padding: 18px;
            color: var(--muted);
            font-size: 14px;
            vertical-align: top;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background: var(--green-50);
        }

        .product-name {
            color: var(--text);
            font-weight: 800;
        }

        .id {
            color: var(--green-700);
            font-weight: 800;
        }

        .actions {
            white-space: nowrap;
        }

        .actions a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 32px;
            padding: 0 12px;
            margin-right: 8px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 800;
            text-decoration: none;
        }

        .edit {
            background: var(--green-100);
            color: var(--green-950);
        }

        .delete {
            background: var(--danger-bg);
            color: var(--danger);
        }

        @media (max-width: 800px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
                padding: 18px 20px;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="brand">Inventory Studio</div>

    <div class="nav-links">
        <a href="<?= site_url('users'); ?>">Users</a>
        <a href="<?= site_url('products'); ?>" class="active">Products</a>
        <a href="<?= site_url('logout'); ?>" class="logout">Logout</a>
    </div>
</nav>

<main class="container">
    <div class="topbar">
        <div>
            <div class="eyebrow">Product management</div>
            <h1>Product <span>Directory</span></h1>
        </div>

        <a class="add-button" href="<?= site_url('products/create'); ?>">+ Add Product</a>
    </div>

    <div class="stats">
        <div class="stat-card">
            <small>Total Products</small>
            <strong><?= $totalProducts; ?></strong>
        </div>
        <div class="stat-card">
            <small>Available Stock</small>
            <strong><?= $availableStock; ?></strong>
        </div>
        <div class="stat-card">
            <small>Inventory Value</small>
            <strong>₱<?= number_format($inventoryValue, 2); ?></strong>
        </div>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td class="id"><?= htmlspecialchars($product['id']); ?></td>
                        <td class="product-name"><?= htmlspecialchars($product['product_name']); ?></td>
                        <td><?= htmlspecialchars($product['description']); ?></td>
                        <td>₱<?= number_format((float) $product['price'], 2); ?></td>
                        <td><?= htmlspecialchars($product['quantity']); ?></td>
                        <td class="actions">
                            <a class="edit" href="<?= site_url('products/edit/' . $product['id']); ?>">Edit</a>
                            <a
                                class="delete"
                                href="<?= site_url('products/delete/' . $product['id']); ?>"
                                onclick="return confirm('Are you sure you want to delete this product?');"
                            >Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
</body>
</html>
