<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/css/auth.css">
</head>
<body>
<div class="auth-container">
    <h2>Login</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <?php if (isset($validation)): ?>
        <div class="alert">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form method="post" action="/login" autocomplete="off">
        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <div class="link">
        Don't have an account? <a href="/register">Sign Up</a>
    </div>
</div>
</body>
</html>
