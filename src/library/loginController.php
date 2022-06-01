<?php

// $_post = json_decode(file_get_contents('resources/user.json'),true);
// if(isset($_POST['email']));
// if(isset($_POST['email']) && $_POST['password']){
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     echo "Yes, user is set";
// }else {
//     echo "No, mail or password is not set";
// }

$email = $_POST['email'];
$password = $_POST['password'];

echo "email: $email y Password: $password";