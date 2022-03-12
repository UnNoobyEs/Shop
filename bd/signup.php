<?php
include "bd.php";

if (isset($_POST["password"])) {
    $Email = $link->real_escape_string($_POST["email"]);
    $Login = $link->real_escape_string($_POST["login"]);
    $Password = $link->real_escape_string($_POST["password"]);
    $Password=MD5($Password);
    if ($_POST["password"] != $_POST["passwordAccept"])
    {
        echo "Пароли не совпадают";
    }
else {
        $result = $link->query("SELECT * FROM `users` WHERE `Login` = '$Login'");
        if ($result->num_rows) {
            echo "Такой пользователь уже существует";
        } else {
            $link->query("INSERT INTO `users` VALUES (NULL,'$Email','$Login','$Password')");
            if (!$link->errno) {
                echo "Вы успешно зарегестрировали новый аккаунт";
            } else {
                echo "Ошибка регистрации,попробуйте позже.";
            }
        }
    }
}