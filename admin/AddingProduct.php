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
    <a href="index.php" class="backBTN">back</a>
    <form id="regForm" action="addingProducts.php" method="post">
        <label for="">
            <input type="text" name="name" placeholder="Product Name" class="inputReg">
        </label>
        <label for="">
            <input type="text" name="autor" placeholder="Product Autor" class="inputReg">
        </label>
        <label for="">
            <input type="text" name="tags" placeholder="Product Tags" class="inputReg">
        </label>
        <label for="">
            <input type="text" name="file" placeholder="Product File Name" class="inputReg">
        </label>
        <label for="">
            <input type="text" name="price" placeholder="Product Price" class="inputReg">
        </label>
        <button class="regB">Add Product</button>
    </form>
    <!--    //Открытй доступ всем-->
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