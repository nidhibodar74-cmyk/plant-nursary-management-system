<!DOCTYPE html>
<html>
<head>
    <title>Plant Report by Status</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 18px; }
        h2 { margin-top: 30px; background: #f0f0f0; padding: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        img { width: 90px; }
    </style>
</head>
<body>
<?= $this->include('layouts/header') ?>
<h1>Plant Report Grouped by Status</h1>
<div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap; padding: 30px" >


<?php

    if (empty($plants)) {
        echo "<p>No plant data found.</p>";
    } else {
        // Group plants by status
        $grouped = [];
        foreach ($plants as $plant) {
            $grouped[$plant['status']][] = $plant;
        }

        foreach ($grouped as $status => $group) {
            echo "<h2>Status: " . ucfirst($status) . "</h2>";
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Watering</th>
                        <th>Sunlight</th>
                        <th>Image</th>
                    </tr>";
            foreach ($group as $plant) {
                echo "<tr>
                        <td>{$plant['id']}</td>
                        <td>{$plant['productname']}</td>
                        <td>{$plant['category']}</td>
                        <td>{$plant['price']}</td>
                        <td>{$plant['quantity']}</td>
                        <td>{$plant['wateringneed']}</td>
                        <td>{$plant['sunlight']}</td>
                        <td>";
                if (!empty($plant['image'])) {
                    echo "<img src='" . base_url('uploads/' . $plant['image']) . "' alt='Image'>";
                } else {
                    echo "No Image";
                }
                echo "</td></tr>";
            }
            echo "</table>";
        }
    }
?>
</div>
<?= $this->include('layouts/footer') ?>

</body>
</html>
