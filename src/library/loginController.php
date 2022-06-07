<?php

require_once "loginManager.php";
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

if (isset($_POST["login"])){
    login();
}

if (isset($_POST["logout"])){
    logout();
}


