<?php
session_start();
$host = 'localhost';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'shop';   // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

// Ругаемся, если соединение установить не удалось
if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
}

//Если переменная Name передана
if (isset($_POST["Login"])) {
//Если это запрос на обновление, то обновляем
    if (isset($_GET['red_id'])) {
        $sql = mysqli_query($link, "UPDATE `users` SET `Login` = '{$_POST['Login']}',`Email` = '{$_POST['Email']}' WHERE `id`={$_GET['red_id']}");
    } else {
        //Иначе вставляем данные, подставляя их в запрос
        $sql = mysqli_query($link, "INSERT INTO `users` (`Login`, `Email`) VALUES ('{$_POST['Login']}', '{$_POST['Email']}')");
    }
//Если вставка прошла успешно
    if ($sql) {
        echo '<p>successfully!</p>';
    } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
}

if (isset($_GET['red_id'])) {
    $sql = mysqli_query($link, "SELECT `id`, `Login`, `Email` FROM `users` WHERE `ID`={$_GET['red_id']}");
    $product = mysqli_fetch_array($sql);
}
?>
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
<div class="UserEdit">
</table>
<form action="" method="post">
    <table class="UserEditTable">
        <tr>
            <td>Login:</td>
            <td><input type="text" name="Login" value="<?= isset($_GET['red_id']) ? $product['Login'] : ''; ?>"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="Email" value="<?= isset($_GET['red_id']) ? $product['Email'] : ''; ?>"></td>
        </tr>
        <tr>
            <input type="submit" value="Save" class="EditBTN">
        </tr>
    </table>
</form>
<table border='1'>
    <tr>
        <td>id</td>
        <td>Login</td>
        <td>Email</td>
        <td>Edit</td>
    </tr>
    <?php
    $sql = mysqli_query($link, 'SELECT `id`, `Login`, `Email` FROM `users`');
    while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
            "<td>{$result['id']}</td>" .
            "<td>{$result['Login']}</td>" .
            "<td>{$result['Email']}</td>" .
            "<td><a href='?red_id={$result['id']}'>Edit</a></td>" .
            '</tr>';
    }
    ?>
</table>
</table>
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
</div>
</body>
</html>