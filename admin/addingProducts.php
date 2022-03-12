<?php
include "../bd/bd.php";
    $name = $link->real_escape_string($_POST["name"]);
    $autor = $link->real_escape_string($_POST["autor"]);
    $tags = $link->real_escape_string($_POST["tags"]);
    $file = $link->real_escape_string($_POST["file"]);
    $price = $link->real_escape_string($_POST["price"]);
    {
        $result = $link->query("SELECT * FROM `products` WHERE `name` = '$name'");
        if ($result->num_rows) {
            echo "This product already exists.";
        } else {
            $link->query("INSERT INTO `products` VALUES (NULL,'$name','$autor','$tags','$file','$price')");
            if (!$link->errno) {
                echo "You have successfully added a new product";
            } else {
                echo "error adding, try again later";
            }
        }
}
exit ('<br><a href ="index.php">Exit</a>');
