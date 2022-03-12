<?php session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$db_name='shop';
$link = mysqli_connect($host,$user,$password,$db_name);
mysqli_query($link, "SET NAMES'utf8'");

if (isset($_GET['del'])) {
    $Name = $_GET['del'];

    $query = "DELETE FROM `products` WHERE `name`='$Name'";
    mysqli_query($link, $query) or die (mysqli_error($link));
}
$query= "SELECT * FROM `products`";
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
        <div class="ProductD">
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Autor</th>
                <th>Tags</th>
                <th>File</th>
                <th>Price</th>
                <th>Delete Product</th>
            </tr>
            <?php foreach ($data as $Name) {?>
                <tr>
                    <td><span class="filespan"><?=$Name['id']?></span></td>
                    <td><span class="LoginSpan"><?=$Name['name']?></span></td>
                    <td><span class="EmailSpan"><?=$Name['autor']?></span></td>
                    <td><span class="LoginSpan"><?=$Name['tags']?></span></td>
                    <td >
                        <figure>
                           <span><img src="../img/<?= $Name["file"] ?>"  class="FileIMG" alt=""></span>
                        </figure>
                    </td>
                    <td><span class="EmailSpan"><?=$Name['price']?></span></td>
                    <td><a href="?del=<?=$Name['name']?>">Delete</a></td>
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