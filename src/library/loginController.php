<?php

$_SESSION['email'] = $_REQUEST['email'];
$_SESSION['password'] = $_REQUEST['password'];
$password = $_POST['password'];
$email = $_POST['email'];
$username = $_POST['name'];
$url = "http://localhost/documents/php-employee-management-v1-1/resources/users.json";

$result = json_decode(file_get_contents($url));
foreach($result->users as $value){
    // echo "User Name: " . $value->name . "<br>";
    // echo "Email: " . $value->email . "<br>";
    // echo "Password: " . $value->password . "<br>";
}
// var_dump($result);


$hash = $value->password;

if (password_verify($password, $hash) && $email == $value->email) {
    echo '¡Valid credentials!';
    header("location:../../src/dashboard.php");
} else {
    $msgError = "<div class='invalid-feedback'> Invalid email! Espabile!
    </div>";
    header("location:../../index.php");
    // echo 'Invalid credentials!';
}