<?php
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $_SESSION["username"] = $username;
    // header("location: ./users_create.php");