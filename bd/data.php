<?php
include "bd.php";
if (isset($_GET["sort"])) {
    $sorting = $_GET["sort"];
} else {
    $sorting = "";
}
switch ($sorting) {

    case 'price-asc';
        $sorting = 'price ASC';
        $sort_name = 'Price (Low to high)';
        break;

    case 'price-desc';
        $sorting = 'price DESC';
        $sort_name = 'Price (high to Low)';
        break;

    case 'name-desc';
        $sorting = 'name DESC';
        $sort_name = 'Price (high to Low)';
        break;

    case 'name-asc';
        $sorting = 'name ASC';
        $sort_name = 'Price (Low to high)';
        break;

    case 'news';
        $sorting = 'id ASC';
        $sort_name = 'Newest';
        break;

    default:
        $sorting = 'id ASC';
        $sort_name = 'Sort by...';
        break;
}


$shop = $link->query("SELECT * FROM `products` ORDER  BY $sorting")->fetch_all(MYSQLI_ASSOC);
$sellers = $link->query("SELECT * FROM `products` WHERE `best_sellers` ORDER  BY $sorting")->fetch_all(MYSQLI_ASSOC);

include "db_disconnect.php";

