<?php 
include "submit.php";
?>
<html>
    <head>
        <title>Beer Recipe Log</title>
        <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<?php 
$error_message = "";$success_message = "";

// Register user
if(isset($_POST['btnsignup'])){
   $username = trim($_POST['username']);
   $fName = trim($_POST['fName']); 
   $lName = trim($_POST['lName']);
   $email = trim($_POST['email']);
   $password = trim($_POST['password']);
   $confirmpassword = trim($_POST['confirmpassword']);

   $isValid = true;

   // Check if fields are empty or not
   if($username == '' || $fName == '' || $lName == '' || $email == '' || $password == '' || $confirmpassword == ''){
     $isValid = false;
     $error_message = "Please fill all fields.";
   }

   // Check if confirm password matching or not
   if($isValid && ($password != $confirmpassword) ){
     $isValid = false;
     $error_message = "Confirm password not matching";
   }

   if($isValid){

     // Check if Username already exists
     $stmt = $con->prepare("SELECT * FROM users WHERE username = ?");
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $result = $stmt->get_result();
     $stmt->close();
     if($result->num_rows > 0){
       $isValid = false;
       $error_message = "Username already exists.";
     }

   }

   if($isValid){

    // Check if email already exists
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    if($result->num_rows > 0){
      $isValid = false;
      $error_message = "Email already exists.";
    }

  }

   // Insert records
   if($isValid){
     $insertSQL = "INSERT INTO users (username,fName,lName,email,password) values(?,?,?,?,?)";
     $stmt = $con->prepare($insertSQL);
     $stmt->bind_param("sssss",$username,$fName,$lName,$email,MD5('$password'));
     $stmt->execute();
     $stmt->close();

     $success_message = "Account created successfully.";
   }
}
?>
    </head>
<body>
    <div>
        <img src="photos/BP_Logo.jpg" alt="Logo" width="125" height="100">
    </div>
    <h1>Brewing Recipe Log Account Creation Page</h1>
    <div class="container">
    <div class='row'>

<div class='col-md-6' >

  <form method='post' action=''>
    <?php 
    // Display Error message
    if(!empty($error_message)){
    ?>
    <div class="alert alert-danger">
      <strong>Error!</strong> <?= $error_message ?>
    </div>

    <?php
    }
    ?>

    <?php 
    // Display Success message
    if(!empty($success_message)){
    ?>
    <div class="alert alert-success">
      <strong>Success!</strong> <?= $success_message ?>
    </div>

    <?php
    }
    ?>

    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" name="username" id="username" required="required" maxlength="80">
    </div>
    <div class="form-group">
      <label for="fName">First Name:</label>
      <input type="text" class="form-control" name="fName" id="fName" required="required" maxlength="80">
    </div>
    <div class="form-group">
      <label for="lName">Last Name:</label>
      <input type="text" class="form-control" name="lName" id="lName" required="required" maxlength="80">
    </div>
    <div class="form-group">
      <label for="email">Email Address:</label>
      <input type="text" class="form-control" name="email" id="email" required="required" maxlength="80">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password" id="password" required="required" maxlength="80">
    </div>
    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" onkeyup='' required="required" maxlength="80">
    </div>
<br>
    <button type="submit" name="btnsignup" class="btn btn-outline-success">Submit</button>
  </form>
</div>
</div>
    <a href="index.php">Back to Login Page</a>
</div>
</body>
</html>