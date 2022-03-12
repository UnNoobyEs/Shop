<?php session_start();
include "bd/databuy.php";

if (isset($_GET["id"])){
    $good_id = $_GET["id"];
}

?>
<!doctype html>
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
            <?php require ("header.php") ?>
            <?php foreach ($shop as $item): ?>
            <?php if ($item["id"] == $good_id):?>
    <div>
        <div class="container">
            <div class="buy">
                <div class="buyImg">
                    <img src="img/<?= $item["file"] ?>" alt="">
                </div>
                <div class="buyInfo">
                    <h5>
                        <?= $item["name"]?>
                    </h5>
                    <p>
                        SKU: 1120988
                    </p>
                    <p class="buyPrice">
                        <span>
                            <?= $item["price"]?>
                        </span>
                    </p>
                    <p class="buyColors">
                        Colors:<?= $item["colors"]?>
                    </p>

                    <!--                    <p>-->
<!--                        Quantity-->
<!--                        <p>-->
<!--                            <label for="">-->
<!--                                <input type="number" value="1"  min="1" max="100" name="buyNumber" class="buyNum">-->
<!--                            </label>-->
<!--                         </p>-->
<!--                    </p>-->
                    <p>
                        <button data-id="<?= $item["name"]; ?>" class="btnB">Add to Cart </button>
                    </p>
                    <p>
                        <div class="rangeB">
                            <button class="accordionB">Custom filter</button>
                                <div class="panelB">
                                    <p>I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item.</p>
                                </div>
                        </div>
                    </p>
                    <p>
                        <div class="rangeB">
                            <button class="accordionB">RETURN & REFUND POLICY</button>
                            <div class="panelB">
                                <p>I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item.</p>
                            </div>
                        </div>
                    </p>
                     <p>
                            <div class="rangeB">
                                <button class="accordionB">SHIPPING INFO</button>
                                <div class="panelB">
                        <p>I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item.</p>
                                 </div>
                            </div>
                      </p>
                </div>
    <div class="InfoP">
        <p>I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item.</p>
    </div>
            </div>
            </div>
    </section>
<?php endif;?>
<?php endforeach;?>
    <?php require ("footer.php") ?>
    <script src="js/buy.js"></script>
</body>
</html>