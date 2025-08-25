<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Edit Plant</title>
<style>
  /* Reuse styles from create page for consistency */
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f5f7fa;
    margin: 0; padding: 20px;
    display: flex;
    justify-content: center;
  }

  .container {
    background: white;
    max-width: 480px;
    width: 100%;
    padding: 30px 40px;
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  }

  h2 {
    margin-bottom: 24px;
    color: #333;
    font-weight: 700;
    text-align: center;
  }

  form input[type="text"],
  form input[type="file"],
  form input[type="number"] {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 18px;
    border: 1px solid #ccd0d5;
    border-radius: 6px;
    font-size: 16px;
    transition: border-color 0.3s ease;
  }

  form input[type="text"]:focus,
  form input[type="file"]:focus,
  form input[type="number"]:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0,123,255,0.3);
  }

  button {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 6px;
    background-color: #28a745;
    color: white;
    font-size: 18px;
    cursor: pointer;
    font-weight: 600;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #218838;
  }

  img {
    display: block;
    margin: 0 auto 15px;
    max-width: 150px;
    border-radius: 8px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
  }
</style>
</head>
<body>

<div class="container">
    <h2>Edit Plant</h2>

    <form action="/plant/update/<?= $plant['id'] ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="productname" value="<?= esc($plant['productname']) ?>" placeholder="Product Name" required />
        <input type="text" name="category" value="<?= esc($plant['category']) ?>" placeholder="Category" required />
        <input type="number" step="0.01" name="price" value="<?= esc($plant['price']) ?>" placeholder="Price" required />
        <input type="number" name="quantity" value="<?= esc($plant['quantity']) ?>" placeholder="Quantity" required />
        <input type="text" name="wateringneed" value="<?= esc($plant['wateringneed']) ?>" placeholder="Watering Need" />
        <input type="text" name="sunlight" value="<?= esc($plant['sunlight']) ?>" placeholder="Sunlight" />
        <input type="text" name="status" value="<?= esc($plant['status']) ?>" placeholder="Status" />
        <input type="file" name="image" accept="image/*" />
        <img src="/uploads/<?= esc($plant['image']) ?>" alt="Plant Image" />
        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>
