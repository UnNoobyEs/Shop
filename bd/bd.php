<?php
    $link = mysqli_init();
    $link = new mysqli("localhost","root","","shop");
    $link->set_charset("utf8");