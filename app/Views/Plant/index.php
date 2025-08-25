<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Plant Management System</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f5f7fa;
      margin: 0; padding: 30px;
    }

    .navbar {
      background-color: #2c3e50;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 14px 30px;
      margin-bottom: 30px;
      border-radius: 0 0 8px 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .site-title {
      font-size: 20px;
      font-weight: bold;
      letter-spacing: 0.5px;
    }

    .navbar-right .nav-link {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-size: 15px;
      font-weight: 500;
      transition: color 0.3s;
    }

    .navbar-right .nav-link:hover {
      color: #a0d8f1;
    }

    .container {
      max-width: 1300px;
      margin: 0 auto;
      background: white;
      border-radius: 8px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.12);
      padding: 30px;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
      font-weight: 700;
    }

    .btn-add {
      display: inline-block;
      margin-bottom: 20px;
      background-color:rgb(4, 63, 127);
      color: white;
      padding: 12px 24px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .btn-add:hover {
      background-color: #0056b3;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 18px;
    }

    th, td {
      padding: 14px 18px;
      border-bottom: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color: #2c3e50;
      color: white;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    tbody tr:hover {
      background-color: #f1f6fb;
    }

    td img {
      width: 100px;
      border-radius: 8px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    .action-links a {
      color: #007bff;
      text-decoration: none;
      margin: 0 8px;
      font-weight: 600;
      transition: color 0.3s ease;
    }

    .action-links a:hover {
      color: #0056b3;
      text-decoration: underline;
    }

    .flash-message {
      background-color: #d4edda;
      color: #155724;
      border-radius: 6px;
      padding: 15px 20px;
      margin-bottom: 20px;
      border: 1px solid #c3e6cb;
      font-weight: 600;
      text-align: center;
    }

    .btn {
      display: inline-block;
      padding: 8px 14px;
      border-radius: 5px;
      font-weight: 600;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-size: 14px;
      border: none;
      color: white;
    }

    .btn-success {
      background-color: rgb(120, 214, 225);
    }

    .btn-success:hover {
      background-color: rgb(22, 108, 125);
    }

    .btn-danger {
      background-color: rgb(227, 212, 178);
    }

    .btn-danger:hover {
      background-color: rgb(169, 151, 59);
    }
  </style>
</head>
<body>

  <!-- Main Content -->
  <div class="container">
    <?= $this->include('layouts/header') ?>
    <h2>Plants Information</h2>

    <!-- //<a href="<?= base_url('plant/create') ?>" class="btn-add">+ Add New Plant</a> -->

    <?php if (session()->getFlashdata('success')) : ?>
      <div class="flash-message"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <table>
      <thead>
        <tr>
          <th>ID</th><th>Name</th><th>Category</th><th>Price</th><th>Quantity</th>
          <th>Watering Need</th><th>Sunlight</th><th>Status</th><th>Image</th><th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($plants as $plant): ?>
          <tr>
            <td><?= $plant['id'] ?></td>
            <td><?= esc($plant['productname']) ?></td>
            <td><?= esc($plant['category']) ?></td>
            <td><?= number_format($plant['price'], 2) ?></td>
            <td><?= esc($plant['quantity']) ?></td>
            <td><?= esc($plant['wateringneed']) ?></td>
            <td><?= esc($plant['sunlight']) ?></td>
            <td><?= esc($plant['status']) ?></td>
            <td><img src="<?= base_url('uploads/' . esc($plant['image'])) ?>" alt="Plant Image"></td>
            <td class="action-links">
              <a href="<?= base_url('plant/edit/' . $plant['id']) ?>" class="btn btn-success">Edit</a>
              <a href="<?= base_url('plant/delete/' . $plant['id']) ?>" class="btn btn-danger" onclick="return confirm('Delete this plant?')">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?= $this->include('layouts/footer') ?>
  </div>

</body>
</html>
