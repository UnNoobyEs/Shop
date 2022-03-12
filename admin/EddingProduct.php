<?php session_start();
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
if (isset($_POST["Name"])) {
//Если это запрос на обновление, то обновляем
    if (isset($_GET['red_id'])) {
        $sql = mysqli_query($link, "UPDATE `products` SET `name` = '{$_POST['Name']}',`autor` = '{$_POST['Autor']}',`tags` = '{$_POST['Tags']}',`file` = '{$_POST['File']}',`price` = '{$_POST['Price']}',`colors` = '{$_POST['Colors']}' WHERE `id`={$_GET['red_id']}");
    } else {
        //Иначе вставляем данные, подставляя их в запрос
        $sql = mysqli_query($link, "INSERT INTO `products` (`name`, `autor`, `tags`, `file`, `price`,`colors`) VALUES ('{$_POST['Name']}', '{$_POST['Autor']}', '{$_POST['Tags']}', '{$_POST['File']}', '{$_POST['Price']}','{$_POST['Colors']}')");
    }
//Если вставка прошла успешно
    if ($sql) {
        echo '<p style="position:absolute ;left: 50%;font-size: 20px; color: green">Save</p>';
    } else {
        echo '<p style="position:absolute ;left: 50%;font-size: 20px; color: red">Fatal Error: ' . mysqli_error($link) . '</p>';
    }
}

if (isset($_GET['red_id'])) {
    $sql = mysqli_query($link, "SELECT `id`, `name`, `autor`, `tags`, `file`, `price`,`colors` FROM `products` WHERE `ID`={$_GET['red_id']}");
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
<a href="search.php" class="backBTN">Search</a>

<div class="UserEdit">
<form action="" method="post" class="ProductEdit">
    <table class="UserEditTable">
        <tr>
            <td>Name:</td>
            <td><input type="text" name="Name" value="<?= isset($_GET['red_id']) ? $product['name'] : ''; ?>"></td>
        </tr>
        <tr>
            <td>Autor:</td>
            <td><input type="text" name="Autor" value="<?= isset($_GET['red_id']) ? $product['autor'] : ''; ?>"></td>
        </tr>
        <tr>
            <td>Tags:</td>
            <td><input type="text" name="Tags" value="<?= isset($_GET['red_id']) ? $product['tags'] : ''; ?>"></td>
        </tr>
        <tr>
            <td>File:</td>
            <td><input type="text" name="File" value="<?= isset($_GET['red_id']) ? $product['file'] : ''; ?>"></td>
        </tr>
        <tr>
            <td>Price:</td>
            <td><input type="text" name="Price" value="<?= isset($_GET['red_id']) ? $product['price'] : ''; ?>"></td>
        </tr>
        <tr>
            <td>Colors:</td>
            <td><input type="text" name="Colors" value="<?= isset($_GET['red_id']) ? $product['colors'] : ''; ?>"></td>
        </tr>
    </table>
    <tr>
        <input type="submit" value="Save" class="EditBTN">
    </tr>
</form>
<table border='1'>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Autor</th>
        <th>Tags</th>
        <th>File</th>
        <th>Price</th>
        <th>Colors</th>
        <th>Edit Product</th>
    </tr>
    <?php
    $sql = mysqli_query($link, 'SELECT `id`, `name`, `autor`,`tags`,`file`,`price`,`colors` FROM `products`');
    while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
            "<td>{$result['id']}</td>" .
            "<td>{$result['name']}</td>" .
            "<td>{$result['autor']}</td>" .
            "<td>{$result['tags']}</td>" .
            "<td>{$result['file']}</td>" .
            "<td>{$result['price']}</td>" .
            "<td>{$result['colors']}</td>" .
            "<td><a href='?red_id={$result['id']}'>Edit</a></td>" .
            '</tr>';
    }
    ?>

</table>
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