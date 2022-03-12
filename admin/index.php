<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin.css">
    <title>Админ-Панель</title>
</head>
<body>
<?php if (isset($_SESSION["auth"])): ?>
<div class="exit">
    <a href="signOUT.php" class="exitBTN">Leave admin session</a>
</div>
<div class="admin">
<div class="Product">
<h2>Product</h2>
    <a href="DeletionProduct.php">Deletion</a>
    <a href="AddingProduct.php">Adding</a>
    <a href="EddingProduct.php">Editing</a>
</div>
    <div class="Users">
        <h2>Users</h2>
        <a href="DeletionUsers.php">Deletion</a>
        <a href="AddingUSER.php">Adding</a>
        <a href="EddingUser.php">Editing</a>
    </div>
</div>
<?php else: ?>
<div class="Login">
    <form action="signinA.php" method="post" class="AdminLOGIN">
        <label for="">
            <input type="text" name="login" placeholder="Login" class="inputlog">
        </label>
        <label for="">
            <input type="password" name="password" placeholder="Password" class="inputlog">
        </label>
        <label for="">
            <input type="submit" value="Login" class="logB">
        </label>
    </form>
</div>
<?php endif ?>

</body>
</html>