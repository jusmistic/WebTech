<?php
    include("user.php");
    session_start();
    $user = new User();
    $user->logout();
    header('Location: /article.php');
?>