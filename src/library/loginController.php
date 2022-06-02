<?php
$password = $_POST['password'];
$email = $_POST['email'];
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
} else {
    $msgError = "<p>Invalid credentials ! Espabile !</p>";
    header("location:../../index.php");
    // echo 'Invalid credentials!';
}
// $ch = curl_init();

// $email = $_POST['email'];
// $password = $_POST['password'];

// echo "email: $email y Password: $password";