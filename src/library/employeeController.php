<?php

require_once "employeeManager.php";
if (isset($_POST["addEmployee"])){
 
    header("Location:../employee.php");
}
if (isset($_POST['submit'])){
    addEmployee();
    header("Location:../dashboard.php");
}

dataEmployees();


