<?php
$password = $_POST['password'];
$url = "http://localhost/documents/php-employee-management-v1-1/resources/users.json";

$result = json_decode(file_get_contents($url));
foreach($result->users as $value){
    echo "User Name: " . $value->name . "<br>";
    echo "Email: " . $value->email . "<br>";
    echo "Password: " . $value->password . "<br>";
}
// var_dump($result);


$hash = $value->password;

if (password_verify($password, $hash)) {
    
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}
