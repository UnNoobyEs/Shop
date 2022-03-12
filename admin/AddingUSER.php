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
    <form id="regForm" action="signup.php" method="post">
        <label for="">
            <input type="email" name="email" placeholder="Email" class="inputReg">
        </label>
        <label for="">
            <input type="text" name="login" placeholder="Login" class="inputReg">
        </label>
        <label for="">
            <input type="password" name="password" placeholder="Password" class="inputReg">
        </label>
        <label for="">
            <input type="password" name="passwordAccept" placeholder="Password Accept" class="inputReg">
        </label>
        <button class="regB">Register</button>
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