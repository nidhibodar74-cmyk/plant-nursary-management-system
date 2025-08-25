<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="/css/auth.css">
</head>
<body>
<div class="auth-container">
    <h2>Sign Up</h2>

    <?php if (isset($validation)): ?>
        <div class="alert">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form method="post" action="/register" autocomplete="off">
        <input type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>" required>
        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>

    <div class="link">
        Already have an account? <a href="/login">Login</a>
    </div>
</div>
</body>
</html>
