<?php session_start();

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

<?php require "header.php"; ?>

<section class="cart">
    <h1>The product you have selected</h1>
    <div class="carts">

        <p>Product list</p>
        <div class="mini-card"> (the price will be indicated when ordering)</div>
        <section class="contacts">
            <div class="container">
                <p>In order to order products, you need to fill out an application, due to the fact that at the moment the price tag of products is changing very often, information about the product must be checked with the sales consultant. When submitting an application, you will be answered within a day or will contact you by mobile phone, thank you for your understanding.</p>
                <div class="info_field">
                    <div class="fieldL fieldG ">
                        <label for="">
                            <input type="text" placeholder="Name" name="name" class="fieldI">
                        </label>
                        <label for="">
                            <input type="email" placeholder="Email" name="email" class="fieldI">
                        </label>
                        <label for="">
                            <input type="text" placeholder="Number" name="number" class="fieldI">
                        </label>
                        <label for="">
                            <textarea name="messege" placeholder="Type your message here..." id="messege"></textarea>
                        </label>
                        <label for="">
                            <input type="submit" value="Buy" class="submit submitb">
                        </label>
                        </label>
                    </div>
                </div>
            </div>
        </section>

    </div>
</section>

<!--<footer class="qwe">-->
<!--    <div class="container">-->
<!--        <div class="wrapper">-->
<!--            <div class="phone">-->
<!--                <span>Customer Service:</span>-->
<!--                <p><a href="#">123-456-7890</a></p>-->
<!--            </div>-->
<!--            <nav>-->
<!--                <p><a href="shop.php">Shop</a></p>-->
<!--                <p><a href="contact.php">Shipping & Returns</a></p>-->
<!--                <p><a href="contact.php">Contact</a></p>-->
<!--            </nav>-->
<!--            <div class="social">-->
<!--                <a href="#"><img src="img/icon1.webp" alt=""></a>-->
<!--                <a href="#"><img src="img/icon2.webp" alt=""></a>-->
<!--                <a href="#"><img src="img/icon3.webp" alt=""></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main.js"></script>

<script src="js/index.js"></script>
<script src="js/buy.js"></script>
<!--<script src="js/cart.js"></script>-->

</body>
</html>