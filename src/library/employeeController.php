<?php

require_once "employeeManager.php";
if (isset($_POST["addEmployee"])){
 
    header("Location:../employee.php");
}
else if (isset($_POST['submit'])){
    addEmployee();
    header("Location:../dashboard.php");
}
if (isset($_GET['submit'])){
    edit($id);
    header("Location:../dashboard.php");
}
function edit($id){
    editEmployees($id);
}



if($_SERVER['REQUEST_METHOD'] === "DELETE"){
   $data = json_decode(file_get_contents("php://input"), true);
   deleteEmployee($data['id']);
}

else if(isset($_POST['function'])){
 if($_POST["function"] === "read"){
    dataEmployees();
 }}
