<?php

//!Create new employee in dbJSON

function addEmployee() {
    $currentEmployees = file_get_contents("../../resources/employees.json");
    $employeeArray = json_decode($currentEmployees, true);
    $new_employee =
    [
        "id" => hexdec(uniqid()),
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




//!get data from dbJSON AND PRINT IN TABLE

function dataEmployees(){
    $pathEmployees = "../../resources/employees.json";
    $dataEmployees = json_decode(file_get_contents($pathEmployees));
    foreach($dataEmployees as $value){
        $userId = $value->id;
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
            echo "<tr data-id={$userId}>";
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
            echo "<td><button class='btn btn-danger' type='sumbit'  data-id='$userId' onclick='deleteEmploye(event)' name='delete'>Despedido</button></td>";
            echo "<td><button type='button' data-edit='$userId' class='btn btn-warning'>Edit</button></td>";
            echo "</tr>";
            echo "</table>";
        }
    }
}

//! Edit selected employee

function edit($id){
    $pathEmployees = "../resources/employees.json";
    $dataEmployees = json_decode(file_get_contents($pathEmployees));
    foreach($dataEmployees as $value){
    if($value->id == $id){
    $_SESSION['firstName'] = $value->name;
    $_SESSION['lastName'] = $value->lastName;
    $_SESSION['employeeEmail'] = $value->email;
    $_SESSION['gender'] = $value->gender;
    $_SESSION['city'] = $value->city;
    $_SESSION['state'] = $value->state;
    $_SESSION['streetAddress'] = $value->streetAddress;
    $_SESSION['age'] = $value->age;
    $_SESSION['postalCode'] = $value->postalCode;
    $_SESSION['phoneNumber'] = $value->phoneNumber;

}
}}

//! Delete Eployee when button is clicked

function deleteEmployee($id){
    $pathEmployees = "../../resources/employees.json";
    $dataEmployees = json_decode(file_get_contents($pathEmployees),true);

    foreach ($dataEmployees as $key => $value) {
        if ($value['id'] === intval($id)) {
            unset($dataEmployees[$key]);
        }
    }

    $json = json_encode($dataEmployees);

    if (file_put_contents('../../resources/employees.json', $json)) {
        foreach($dataEmployees as $value){
            $userId = $value['id'];
            $userNameEmployees = $value['name'];
            $userLastNameEmployees = $value['lastName'];
            $userEmailEmployees = $value['email'];
            $userGenderEmployees = $value['gender'];
            $userCityEmployees = $value['city'];
            $userAddressEmployees = $value['streetAddress'];
            $userStateEmployees = $value['state'];
            $userAgeEmployees = $value['age'];
            $userPostalEmployees = $value['postalCode'];
            $userPhoneNumberEmployees = $value['phoneNumber'];
            if(isset($userNameEmployees)){
                echo "<table>";
                echo "<tr data-id={$userId}>";
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
                echo "<td><button class='btn btn-danger' type='sumbit'  data-id='$userId' onclick='deleteEmploye(event)' name='delete'>Despedido</button></td>";
                echo "<td><button type='button' data-edit='$userId' class='btn btn-warning'>Edit</button></td>";
                echo "</tr>";
                echo "</table>";
            }
        }
    }
}

//!Delete previus data and display changes editing enmployee (failed tu success :(  )

// function deleteEmployeeForEdit($id){
//     $pathEmployees = "../../resources/employees.json";
//     $dataEmployees = json_decode(file_get_contents($pathEmployees),true);

//     foreach ($dataEmployees as $key => $value) {
//         if ($value['id'] === intval($id)) {
//             unset($dataEmployees[$key]);
//         }
//     }

//     $json = json_encode($dataEmployees);

//     if (file_put_contents('../../resources/employees.json', $json)) {
//         foreach($dataEmployees as $value){
//             $userId = $value['id'];
//             $userNameEmployees = $value['name'];
//             $userLastNameEmployees = $value['lastName'];
//             $userEmailEmployees = $value['email'];
//             $userGenderEmployees = $value['gender'];
//             $userCityEmployees = $value['city'];
//             $userAddressEmployees = $value['streetAddress'];
//             $userStateEmployees = $value['state'];
//             $userAgeEmployees = $value['age'];
//             $userPostalEmployees = $value['postalCode'];
//             $userPhoneNumberEmployees = $value['phoneNumber'];
//             if(isset($userNameEmployees)){
//                 echo "<table>";
//                 echo "<tr data-id={$userId}>";
//                 echo "<td>$userNameEmployees</td>";
//                 echo "<td>$userLastNameEmployees</td>";
//                 echo "<td>$userEmailEmployees</td>";
//                 echo "<td>$userGenderEmployees</td>";
//                 echo "<td>$userCityEmployees</td>";
//                 echo "<td>$userAddressEmployees</td>";
//                 echo "<td>$userStateEmployees</td>";
//                 echo "<td>$userAgeEmployees</td>";
//                 echo "<td>$userPostalEmployees</td>";
//                 echo "<td>$userPhoneNumberEmployees</td>";
//                 echo "<td><button class='btn btn-danger' type='sumbit'  data-id='$userId' onclick='deleteEmploye(event)' name='delete'>Despedido</button></td>";
//                 echo "<td><button type='button' data-edit='$userId' class='btn btn-warning'>Edit</button></td>";

//                 echo "</tr>";
//                 echo "</table>";
//             }
//         }
//     }
// }


