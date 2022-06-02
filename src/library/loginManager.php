<?php
session_start();

function login(){
    $password = $_SESSION['password'];
    $email = $_SESSION['email'];
    
    $url = "http://localhost/documents/php-employee-management-v1-1/resources/users.json";
    $result = json_decode(file_get_contents($url));
    // $userPass;
    foreach($result->users as $value){
        $userPass = $value->password;
        $userEmail = $value->email;
        $userName = $value->name;
    }
    $_SESSION['name'] = $userName;
    if (password_verify($password, $userPass) && $email == $userEmail) {
    header("location:../dashboard.php");
    } else {
    header("location:../../index.php");
    }
}
