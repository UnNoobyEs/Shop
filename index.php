<?php session_start(); ?>
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
<section class="NewA">
    <div class="container">
        <div class="common">
        <div class="New">
                <h1>New Casies Arrivals</h1>
                <span class="Avail">Available Now!</span>
                <a href="sellers.php" class="btn">View collection</a>
        </div>
        <img src="img/1.webp" alt="">
        </div>
    </div>
</section>

<section class="advantages">
    <div class="container">
        <div class="benefit">
            <div class="Collection">
                <img src="img/gif1.gif" alt="" class="CollectionG">
                <h3>Casies <br> Best Sellers</h3>
                <span class="CollctionS">"Typocase" Collection</span>
                <a href="#" class="btnC">Buy Now</a>
            </div>
            <img src="img/2.webp" alt="">
            <div class="Shipping">
                <img src="img/gif2.gif" alt="" class="ShippingG">
                <h3>Free <br> Shipping</h3>
                <span class="ShippingS">Only this weekend</span>
            </div>
        </div>
    </div>
</section>

<section class="Pick">
    <div class="container">
        <h2>Pick Your Case</h2>
        <div class="slider">
            <div class="slide">
                <a href="#"><img src="img/3.webp" alt=""></a>
                <a href="#"><img src="img/4.webp" alt=""></a>
                <a href="#"><img src="img/5.webp" alt=""></a>
                <a href="#"><img src="img/6.webp" alt=""></a>
                <a href="#"><img src="img/7.webp" alt=""></a>
            </div>
            <div class="slide">
                <a href="#"><img src="img/5.webp" alt=""></a>
                <a href="#"><img src="img/9.webp" alt=""></a>
                <a href="#"><img src="img/3.webp" alt=""></a>
                <a href="#"><img src="img/7.webp" alt=""></a>
                <a href="#"><img src="img/4.webp" alt=""></a>
            </div>
            <a class="prev" onclick="minusSlide()">&#10094;</a>
            <a class="next" onclick="plusSlide()">&#10095;</a>
        </div>
    </div>
</section>

<section class="Gallery">
    <div class="container">
        <h2>Casies Gallery</h2>
        <div class="GalleryI">
           <a href="">
               <img src="img/galer1.jpg" alt="Gallery">
               <div class="GalleryP">
                   <p>reliability</p>
               </div>
           </a>
            <a href="#">
                <img src="img/galer2.jpg" alt="Gallery">
                <div class="GalleryP">
                    <p>quality</p>
                </div>
            </a>
            <a href="">
                <img src="img/galer3.jpg" alt="Gallery">
                <div class="GalleryP">
                    <p>lower prices</p>
                </div>
            </a>
            <a href="">
                <img src="img/galer4.jpg" alt="Gallery">
                <div class="GalleryP">
                    <p>fast delivery</p>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="Subscriber">
    <div class="container">
        <h2>Be a Casies Subscriber</h2>
        <div class="SubscriberI">
            <label for="">
                <input type="email" placeholder="Enter your email here" name="email" class="field">
            </label>
                <button class="btnI">Subscribe Now</button>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>

<script src="js/index.js"></script>

</body>
</html>