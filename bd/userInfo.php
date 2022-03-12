<?php

if (isset($_SESSION["user_id"])) {
    $Id=$_SESSION["user_id"];
    include "bd.php";
    $LoginInfo = "SELECT Login FROM users where Id=$Id";
    $result = $link -> query($LoginInfo);
    $Vivod = $result ->fetch_row();
    $Login = $Vivod[0];
}
//
//if (isset($_SESSION["user_id"])) {
//    $admin=$_SESSION["user_id"];
//    include "bd.php";
//    $LoginInfo = "SELECT admin FROM users where Id=$admin";
//    $result = $link -> query($LoginInfo);
//    $resAdmin = $result ->fetch_row();
//    $admin = $resAdmin[0];
//}