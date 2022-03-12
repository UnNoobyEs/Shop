<?php include "bd/userInfo.php" ?>
<header class="head">
    <div class="container">
        <div class="header">
            <a href="index.php" class="logoA">
                <img src="img/logo.gif" alt="Логотип" class="logoG" width="100" height="169">
                <span class="logoSpan">Casies</span>
            </a>
            <?php if (isset($_SESSION["user_id"])): ?>
                <div class="loginE">
                    <div class="infomenu">
                    <img src="img/login.svg" alt="login"><a href="#" class="LoginInfo"><?= $Login?> ▼</a>
                        <div class="infoAcc">
                            <div class="infoNav">
                                <nav>
                                    <ul>
                                        <li><a href="bd/signOUT.php"  class="Leave">Leave</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            <?php else: ?>
            <div class="login">
                <a href="#">
                    <img src="img/login.svg" alt="login" class="loginI">
                    <span>Log In</span>
                </a>
            </div>
            <?php endif ?>
            <div class="menu">
                <span><a href="index.php">Home</a></span>
                <span><a href="shop.php">Shop</a></span>
                <span><a href="sellers.php">Best Sellers</a></span>
                <span><a href="contact.php">Contact Us</a></span>
                <a href="cart.php" class="menu-btn"><img src="img/bag.svg" alt="basik" class="basik"><span class="basikT"></span></a>
<!--                <div class="overlay">-->
<!--                        <span class="overlayS">-->
<!--                            Cart-->
<!--                        </span>-->
<!--                        <p class="overlayP">-->
<!--                            You'r Cart is Empty-->
<!--                        </p>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</header>

<section class="formReg">
    <div class="reg">
        <a href="#" class="RegBTN active">Register</a>
        <a href="#" class="logBTN">Login</a>
        <form id="regForm" action="bd/signup.php" method="post">
            <label for="">
                <input type="email" name="email" placeholder="Email" required class="inputReg">
            </label>
            <label for="">
                <input type="text" name="login" placeholder="Login" required class="inputReg">
            </label>
            <label for="">
                <input type="password" name="password" placeholder="Password" required class="inputReg">
            </label>
            <label for="">
                <input type="password" name="passwordAccept" placeholder="Password Accept" required class="inputReg">
            </label>
                <button class="regB">Register</button>
        </form>
        <form action="bd/signin.php" method="post" id="logForm">
            <label for="">
                <input type="text" name="login" placeholder="Login" required class="inputlog">
            </label>
            <label for="">
                <input type="password" name="password" placeholder="Password" required class="inputlog">
            </label>
            <label for="">
                <input type="submit" value="login" class="logB">
            </label>
        </form>
    </div>
</section>