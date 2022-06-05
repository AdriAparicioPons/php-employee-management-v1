<?php



function addEmployee() {
   $currentEmployees = file_get_contents("../../resources/employees.json");
    $employeeArray = json_decode($currentEmployees, true);
    $new_employee = 
    [
       // "id"=> que sume 1  al anterior
       // img = > random
        "name" =>  $_POST['firstName'],
        "lastName" => $_POST['lastName'],
        "email" => $_POST['email'],
        "gender" => $_POST['gender'],
        "city" =>  $_POST['city'],
        "streetAddress" => $_POST['address'],
        "state" => $_POST['state'],
        "age" =>  $_POST['age'],
        "postalCode" => $_POST['zip'],
        "phoneNumber" =>$_POST['phone']
    ];
    
    $employeeArray [] = $new_employee;
    
    
    $finalEmployeeArray = json_encode($employeeArray, JSON_PRETTY_PRINT);
   
    file_put_contents('../../resources/employees.json', $finalEmployeeArray);
 
    
}




function dataEmployees(){
    $pathEmployees = "../../resources/employees.json";
    $dataEmployees = json_decode(file_get_contents($pathEmployees));
    foreach($dataEmployees as $value){
        $userNameEmployees = $value->name;
        $userLastNameEmployees = $value->lastName;
        $userEmailEmployees = $value->email;
        $userGenderEmployees = $value->gender;
        $userCityEmployees = $value->city;
        $userAddressEmployees = $value->streetAddress;
        $userStateEmployees = $value->state;
        $userAgeEmployees = $value->age;
        $userPostalEmployees = $value->postalCode;
        $userPhoneNumberEmployees = $value->phoneNumber;
        if(isset($userNameEmployees)){
            echo "<table>";
            echo "<tr>";
            echo "<td>$userNameEmployees</td>";
            echo "<td>$userLastNameEmployees</td>";
            echo "<td>$userEmailEmployees</td>";
            echo "<td>$userGenderEmployees</td>";
            echo "<td>$userCityEmployees</td>";
            echo "<td>$userAddressEmployees</td>";
            echo "<td>$userStateEmployees</td>";
            echo "<td>$userAgeEmployees</td>";
            echo "<td>$userPostalEmployees</td>";
            echo "<td>$userPhoneNumberEmployees</td>";
            echo "</tr>";
            echo "</table>";
        } 
    }
}



