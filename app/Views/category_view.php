<!DOCTYPE html>
<html>
<head>
    <title>Plant Category Report</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9fdf9;
            padding: 20px;
        }

        h2, h3 {
            color:rgb(17, 4, 89);
        }

        select {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #ffffff;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color:rgb(37, 42, 73);
            color:rgb(206, 206, 210);
        }

        tr:hover {
            background-color: #f1f8e9;
        }

        img {
            width: 90px;
            border-radius: 5px;
        }

        .no-data {
            margin-top: 20px;
            color: #888;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }
    </style>
    <script>
        function filterByCategory(select) {
            const selected = select.value;
            if (selected) {
                window.location.href = '/plant/category/' + encodeURIComponent(selected);
            }
        }
    </script>
</head>
<body>
<div class="container">
    <?= $this->include('layouts/header') ?>
    <h2>Filter Plants by Category</h2>

    <select onchange="filterByCategory(this)">
        <option value="">-- Select Category --</option>
        <?php foreach ($categories as $cat): ?>
            <option value="<?= $cat['category'] ?>" <?= ($selectedCategory == $cat['category']) ? 'selected' : '' ?>>
                <?= ucfirst($cat['category']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <?php if (!empty($plants)): ?>
        <h3>Showing plants in "<?= ucfirst($selectedCategory) ?>" category:</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Plant Name</th>
                    <th>Category</th>
                    <th>Price ($)</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($plants as $plant): ?>
                    <tr>
                        <td><?= $plant['id'] ?></td>
                        <td><?= $plant['productname'] ?></td>
                        <td><?= $plant['category'] ?></td>
                        <td><?= $plant['price'] ?></td>
                        <td><?= $plant['quantity'] ?></td>
                        <td><?= $plant['status'] ?></td>
                        <td>
                            <?php if ($plant['image']): ?>
                                <img src="<?= base_url('uploads/' . $plant['image']) ?>" alt="Plant Image">
                            <?php else: ?>
                                No Image
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php elseif ($selectedCategory): ?>
        <p class="no-data">No plants found in this category.</p>
    <?php endif; ?>
        
</div>
<?= $this->include('layouts/footer') ?>
</body>
</html>
