<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= esc($title ?? 'Plant Management System') ?></title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
  <style>
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
    .logo {
      height: 40px;
      margin-right: 12px;
      vertical-align: middle;
    }
    .navbar-left {
      display: flex;
      align-items: center;
    }


  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
  <div class="navbar-left">
    <img src="<?= base_url('uploads/logo.jpg.png') ?>" alt="Logo" class="logo" />
    <span class="site-title">Plant Nursing Product Manager</span>
  </div>
  <div class="navbar-right">
  <a href="<?= base_url('index') ?>" class="nav-link">Dashboard</a>   
  <a href="<?= base_url('create') ?>" class="nav-link">Add Plant</a>  
    <a href="<?= base_url('about_us') ?>" class="nav-link">About Us</a>
    <a href="<?= base_url('plant/category') ?>" class="nav-link">Category</a>
    <a href="<?= base_url('/plant/report') ?>" class="nav-link">Status</a>
    <a href="<?= base_url('logout') ?>" class="nav-link">Logout</a>
  </div>
</nav>

<div class="container">
