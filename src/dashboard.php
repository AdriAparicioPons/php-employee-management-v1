<?php
session_start();
$name = $_SESSION['name'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../assets/js/index.js" defer></script>
</head>
<body onload="printTable()">
    <h1>BIENVENIDO <?php echo strtoupper($name); ?></h1>
    <form method="post" action="./library/loginController.php">
    <button type="submit"  name="logout">LOG OUT</button>
</form>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>City</th>
                <th>Street No.</th>
                <th>State</th>
                <th>Age</th>
                <th>Postal Code</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody id="tableEmployee">
        </tbody>
        <tbody>
        </tbody>
    </table>
</body>
</html>