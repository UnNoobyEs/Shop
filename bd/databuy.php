<?php
include "bd.php";
$id = ($_GET["id"]);
$shop = $link->query("SELECT * FROM `products` WHERE `id`='$id'")->fetch_all(MYSQLI_ASSOC);
$sellers = $link->query("SELECT * FROM `best_sellers` WHERE `id`='$id'")->fetch_all(MYSQLI_ASSOC);

include "db_disconnect.php";
