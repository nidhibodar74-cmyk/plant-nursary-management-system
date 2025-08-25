
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Add New Plant</title>
<style>
  /* Reset */
  * {
    box-sizing: border-box;
  }

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
    background-color: #007bff;
    color: white;
    font-size: 18px;
    cursor: pointer;
    font-weight: 600;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #0056b3;
  }

  .error {
    background-color: #f8d7da;
    color: #842029;
    padding: 15px 20px;
    border-radius: 6px;
    margin-bottom: 20px;
    border: 1px solid #f5c2c7;
  }
</style>
</head>

<body>

<div class="container">
  
    <h2>Add New Plant</h2>

    <?php if (isset($validation)): ?>
        <div class="error"><?= $validation->listErrors() ?></div>
    <?php endif; ?>

    <form action="/plant/store" method="post" enctype="multipart/form-data">
        <input type="text" name="productname" placeholder="Product Name" required />
        <input type="text" name="category" placeholder="Category" required />
        <input type="number" step="0.01" name="price" placeholder="Price" required />
        <input type="number" name="quantity" placeholder="Quantity" required />
        <input type="text" name="wateringneed" placeholder="Watering Need" />
        <input type="text" name="sunlight" placeholder="Sunlight" />
        <input type="text" name="status" placeholder="Status" />
        <input type="file" name="image" accept="image/*" required />
        <button type="submit">Save</button>
    </form>
   
</div>

</body>
</html>
