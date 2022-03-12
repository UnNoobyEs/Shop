<?php
include "bd.php";

if (isset($_POST["password"])) {
    $Login = $link->real_escape_string($_POST["login"]);
    $Password = $link->real_escape_string($_POST["password"]);
   $Password=MD5($Password);
    $result = $link->query("SELECT * FROM `users` WHERE `Login` = '$Login' AND `Password` ='$Password'");
        if ($result->num_rows) {
            session_start();
            $user = $result->fetch_assoc();
            $_SESSION ["user_id"] = $user ["id"];
            header("location:{$_SERVER['HTTP_REFERER']}");
         } else {
            echo "Неверный логин/пароль";
        }
}
