<?php



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
            echo "<td><button class='btn btn-danger' type='sumbit'  data-id='$userId' onclick='deleteEmploye(event)' name='delete'>Delete</button></td>";
            // echo "<td><button class='btn btn-danger' type='sumbit' data-id='$userId' onclick='deleteEmploye(event)' name='delete'>
            // <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
            // <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
            // </svg>
            // </button></td>";
            echo "<td><button type='button' data-edit='$userId' class='btn btn-warning'>Edit</button></td>";
            echo "</tr>";
            echo "</table>";
        }
    }
}


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
                echo "<td><button class='btn btn-danger' type='sumbit'  data-id='$userId' onclick='deleteEmploye(event)' name='delete'>Delete</button></td>";
                // echo "<td><button class='btn btn-danger' type='sumbit' data-id='$userId' onclick='deleteEmploye(event)' name='delete'>
                // <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                // <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                // </svg>
                // </button></td>";
                echo "<td><button type='button' data-edit='$userId' class='btn btn-warning'>Edit</button></td>";

                echo "</tr>";
                echo "</table>";
            }
        }
    } else {
        echo 'Not save';
    }
}

// function editEmployee(){



// }



