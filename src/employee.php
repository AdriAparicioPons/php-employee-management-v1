<!-- TODO Employee view -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css" type="text/css">
    <script src="./js/index.js" defer></script>
    <title>Document</title>
</head>
<body>
    <section >
    
    <form class="my-4 mx-4" action="../src/library/employeeController.php" method= "post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="firstName">First name</label>
      <input type="text" class="form-control is-valid" name="firstName" id="firstName" placeholder="First name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="lastName">Last name</label>
      <input type="text" class="form-control is-valid" id="lastName" name = "lastName" placeholder="Last name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="email">Email</label>
      <input type="email" class="form-control is-valid" name="email" id="email" placeholder="Email" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email. We keep it low key!.</small>
      <div class="valid-feedback">
        Good email bruh!
      </div>
    </div>
</div>
<div class="form-row">
<div class="col-md-2  mb-2">
    <label for="age">Age</label>
      <input type="text" id="age" name="age" pattern="[0-9]{2}" class="form-control is-valid"  placeholder="insert your age"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
<div class="col-md-4  mb-3">
    <label for="address">Street Address</label>
      <input type="text" class="form-control is-valid" name="address" placeholder="Dominguish street" id="address" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4  mb-2">
    <label for="phone">Phone</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{2}" class="form-control is-valid"  placeholder="666-66-74-31"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    
    </div>
    <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="city">City</label>
      <input type="text" class="form-control is-invalid" id="city" name="city" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="state">State</label>
      <input type="text" class="form-control is-invalid" id="state" name="state" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-1 mb-3">
      <label for="zip">Zip</label>
      <input type="text" class="form-control is-invalid" id="zip" name="zip"placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-row">
  <div class="col-md-3 mb-5">
    <select id="gender" name = "gender" class="custom-select">
  <option selected>Choose your gender</option>
        <option>Male </option>
	    <option>Female</option>
	    <option>Somthing else</option>
    </select>  
    </div>
    </div>
  <button class="btn btn-primary" name ="submit" type="submit">Submit form</button>
  <button type ="button" name="return" id="return">Fuck go back!</button>

</form>


    <section>
</body>
</html>