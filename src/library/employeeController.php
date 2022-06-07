<?php

require_once "employeeManager.php";
if (isset($_POST["addEmployee"])){
 
    header("Location:../employee.php");
}
if (isset($_POST['submit'])){
    addEmployee();
    header("Location:../dashboard.php");
}




// $function = $_POST["function"];

// switch ($function) {
//     case 'read':
//         echo "READ";
//         dataEmployees();
//         break;

//     case 'delete':
//         // $data = json_decode(file_get_contents("php://input"), true);
//         print_r($_POST);
//         // deleteEmployee($id);
//         break;
//     default:

//         break;
// }


if($_SERVER['REQUEST_METHOD'] === "DELETE"){
   $data = json_decode(file_get_contents("php://input"), true);
   deleteEmployee($data['id']);
}else if($_POST["function"] === "read"){
    dataEmployees();
 }
