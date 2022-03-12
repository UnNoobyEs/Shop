<?php session_start();
if (isset($_POST['search'])) {
    $valueToSearch = $_POST['ValueToSearch'];
    $query = "SELECT * FROM `products` WHERE CONCAT(`id`,`autor`,`name`,`tags`,`file`,`price`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM `products`";
    $search_result = filterTable($query);
}

function filterTable ($query) {
    $connect = mysqli_connect("localhost","root","","shop");
    $filer_Result = mysqli_query($connect,$query);
    return $filer_Result;
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
    <title>Document</title>
</head>
<body>
<?php if (isset($_SESSION["auth"])): ?>
<a href="EddingProduct.php" class="backBTN">back</a>
<div class="Search">
<form action="search.php" method="post">
    <input type="text" name="ValueToSearch" placeholder="Search Products">
    <input type="submit" name="search" value="Filter">
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Autor</th>
            <th>Tags</th>
            <th>File</th>
            <th>Price</th>
        </tr>
<?php while($row = mysqli_fetch_array($search_result)): ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['autor'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['tags'] ?></td>
            <td><?php echo $row['file'] ?></td>
            <td><?php echo $row['price'] ?></td>

<?php endwhile; ?>
        </tr>
    </table>
</form>
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