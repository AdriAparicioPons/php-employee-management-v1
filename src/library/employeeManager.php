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
            echo "<td><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-lg' viewBox='0 0 16 16'><path d='M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z'/></svg></td>";
            echo "</tr>";
            echo "</table>";
        }
    }
}


function deleteEmployee(){
    $id = $_POST[$idDelete];
    $data = file_get_contents("../../resources/employees.json");
    $jason = json_decode($data);
    print_r($jason);
    unset($json[$id]);
    $json = json_encode($json, JSON_PRETTY_PRINT);
    file_put_contents('employees.json', $json);
    header('location: ../dashboard.php');
}


