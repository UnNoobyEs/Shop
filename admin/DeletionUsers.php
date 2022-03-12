<?php session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$db_name='shop';
$link = mysqli_connect($host,$user,$password,$db_name);
mysqli_query($link, "SET NAMES'utf8'");

if (isset($_GET['del'])) {
    $Login = $_GET['del'];

    $query = "DELETE FROM `users` WHERE `Login`='$Login'";
    mysqli_query($link, $query) or die (mysqli_error($link));
}
$query= "SELECT * FROM `users`";
$result = mysqli_query($link, $query) or die (mysqli_error($link));

for ($data=[]; $row=mysqli_fetch_assoc($result); $data[] = $row);

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
<div class="UserDelete">
    <table>
        <tr>
            <th>Id</th>
            <th>Login</th>
            <th>Email</th>
            <th>Delete Account</th>
        </tr>
        <?php foreach ($data as $user) {?>
            <tr>
                <td><span class="idSpan"><?=$user['id']?></span></td>
                <td><span class="LoginSpan"><?=$user['Login']?></span></td>
                <td><span class="EmailSpan"><?=$user['Email']?></span></td>
                <td><a href="?del=<?=$user['Login']?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
</div>
<!--//Открытй доступ всем-->
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