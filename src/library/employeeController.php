<?php

require_once "employeeManager.php";
dataEmployees();
if (isset($_POST['submit'])){
    addEmployee();
}