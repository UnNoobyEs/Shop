<?php session_start(); ?>
<?php include "bd/data.php"; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
<?php require "header.php"; ?>
<section class="filte_sort">
    <div class="container">
        <div class="sort">
            <button class="openButton"><?php echo $sort_name; ?></button>
            <div class="overlayF">
                <nav>
                    <ul>
                        <li><a href="?sort=news">Newest</a></li>
                        <li><a href="?sort=price-asc">Price (Low to high)</a></li>
                        <li><a href="?sort=price-desc">Price (high to Low)</a></li>
                        <li><a href="?sort=name-asc">Name A-Z</a></li>
                        <li><a href="?sort=name-desc">Name Z-A</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="filtration">

            <div class="product">
                <?php foreach ($sellers as $value): ?>
                    <div class="view">
                        <a href="buy.php?id=<?= $value["id"] ?>">
                            <figure>
                                <img src="img/<?= $value["file"] ?>" alt="" class="Cover">
                                <figcaption class="TextF">
                                    <span><?= $value["name"]?></span>
                                    <p><?= $value["price"]?></p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
</section>

<?php require ("footer.php") ?>
<script src="js/filter.js"></script>
</body>
</html>