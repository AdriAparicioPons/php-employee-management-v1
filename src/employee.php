<!-- TODO Employee view -->
<?php
require_once "./library/employeeController.php";
session_start();

if(isset($_GET['id'])){
    
    edit($_GET['id']);
}

if(!isset($_SESSION['name'])){
  header("Location: ./../index.php");
} else {
  $name = $_SESSION['name'];

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!------ Include the above in your HEAD tag ---------->
    <!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script> -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login.css" type="text/css">
     <script src="../assets/js/index.js" defer></script> 
    <title>Document</title>
</head>
<body >
    <section class='bg-light rounded ml-5 mr-5 pt-5 pb-5'>
    <form class="my-4 mx-4" action="../src/library/employeeController.php" method= "post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="firstName">First name</label>
      <input type="text" class="form-control is-valid" name="firstName" id="firstName" placeholder="First name" data-type="input" value='<?php echo $_SESSION['firstName'] ?>' required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="lastName">Last name</label>
      <input type="text" class="form-control is-valid" id="lastName" name = "lastName" placeholder="Last name"data-type="input" value='<?php echo $_SESSION['lastName'] ?>' required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="email">Email</label>
      <input type="email" class="form-control is-valid" name="email" id="email" placeholder="Email" data-type="input" value='<?php echo $_SESSION['employeeEmail'] ?>' required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email. We keep it low key!.</small>
    </div>
</div>
<div class="form-row">
<div class="col-md-2  mb-2">
    <label for="age">Age</label>
      <input type="text" id="age" name="age" pattern="[0-9]{2}" class="form-control is-valid"  placeholder="insert your age" data-type="input" value='<?php echo $_SESSION['age'] ?>' required>
    </div>

    <div class="col-md-4  mb-2">
    <label for="phone">Phone</label>
      <input type="tel" id="phone" name="phone" class="form-control is-valid"  data-type="input" placeholder="666-66-74-31" value='<?php echo $_SESSION['phoneNumber'] ?>' required>
    </div>
    <div class="col-md-4  mb-3">
    <label for="address">Street Address</label>
      <input type="text" class="form-control is-valid" name="address" value='<?php echo $_SESSION['streetAddress'] ?>' placeholder="Dominguish street" id="address" data-type="input" required>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="city">City</label>
      <input type="text" class="form-control is-valid" id="city" name="city" placeholder="City" data-type="input" value='<?php echo $_SESSION['city'] ?>' required>

    </div>
    <div class="col-md-2 mb-3">
      <label for="state">State</label>
      <input type="text" class="form-control is-valid" id="state" name="state" placeholder="State" data-type="input" value='<?php echo $_SESSION['state'] ?>' required>
    </div>
    <div class="col-md-1 mb-3">
      <label for="zip">Zip</label>
      <input type="text" class="form-control is-valid" id="zip" name="zip"placeholder="Zip" data-type="input" value='<?php echo $_SESSION['postalCode'] ?>' required>
    </div>
  </div>
  <div class="form-row">
  <div class="col-md-3 mb-5">
    <select id="gender" name = "gender" data-type="input" value='<?php echo $_SESSION['gender'] ?>' class="custom-select">
  <option >Choose your gender</option>
      <option>Male </option>
	    <option>Female</option>
	    <option>Somthing else</option>
    </select>
    </div>
    </div>
  <button class="btn btn-primary" name ="submit" type="submit">Submit form</button>
  <a href="../src/dashboard.php"><button class="btn btn-secondary" type ="button" name="return" id="return">Go back!</button></a> 
</form>
<section>
</body>
</html>