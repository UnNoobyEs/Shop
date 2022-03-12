<?php
    if (isset($_POST["type"]) && isset($_POST["val"])) {
        $type = $_POST["type"] === "author"? "Author": "Name";
        $order = $_POST["val"] === "asc"? "ASC": "DESC";
        include "db_connect.php";


        $photos = $link->query("SELECT * FROM `products` ORDER BY `$type` $order");
        if (!$link->errno) {
            $photos = $photos->fetch_all(MYSQLI_ASSOC);
        }
        else {
            $photos = [];
        }
        echo json_encode($photos);
        include "db_disconnect.php";
    }