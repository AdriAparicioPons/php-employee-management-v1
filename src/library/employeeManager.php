<?php

function dataEmployees(){
    $pathEmployees = "../../resources/employees.json";
    $dateEmployees = json_decode(file_get_contents($pathEmployees));
    foreach($dateEmployees as $value){
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

function printEmployees(){

}

dataEmployees();

function addEmployee(array $newEmployee)
{
// TODO implement it
}


function deleteEmployee(string $id)
{
// TODO implement it
}


function updateEmployee(array $updateEmployee)
{
// TODO implement it
}


function getEmployee(string $id)
{
// TODO implement it
}


function removeAvatar($id)
{
// TODO implement it
}


function getQueryStringParameters(): array
{
// TODO implement it
}

function getNextIdentifier(array $employeesCollection): int
{
// TODO implement it
}
