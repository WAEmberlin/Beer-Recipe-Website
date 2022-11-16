<?php
include "submit.php";
// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>

<!doctype html>
<html>
    <head>
    <title>Beer Recipe Log</title>
        <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  
    <script src="/recipeLog/forms.js"></script>   
<?php 
$error_message = "";$success_message = "";

// Add New Recipe
if(isset($_POST['btnAddRecipe'])){
   $rName = trim($_POST['rName']);
   $Style = trim($_POST['Style']); 
   $Abv = trim($_POST['Abv']);
   $Ibu = trim($_POST['Ibu']);
   $BrewerNames = trim($_POST['BrewerNames']);
   $Notes = trim($_POST['Notes']);

   $isValid = true;

   // Check if fields are empty or not
   if($rName == '' || $Style == '' || $Abv == '' || $Ibu == '' || $BrewerNames == '' || $Notes == ''){
     $isValid = false;
     $error_message = "Please fill all fields.";
   }

   if($isValid){

     // Check if recipe name already exists
     $stmt = $con->prepare("SELECT * FROM recipes WHERE rName = ?");
     $stmt->bind_param("s", $rName);
     $stmt->execute();
     $result = $stmt->get_result();
     $stmt->close();
     if($result->num_rows > 0){
       $isValid = false;
       $error_message = "Recipe name is already existed.";
     }

   }

   // Insert records
   if($isValid){
     $insertSQL = "INSERT INTO recipes (rName,Style,Abv,Ibu,BrewerNames,Notes) values(?,?,?,?,?,?)";
     $stmt = $con->prepare($insertSQL);
     $stmt->bind_param("ssssss",$rName,$Style,$Abv,$Ibu,$BrewerNames,$Notes);
     $stmt->execute();
     $stmt->close();

     $success_message = "Recipe created successfully.";
   }
}
?>
  </head>
<body>
    <!-- NavBar Start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><img src="photos/BP_Logo.jpg" alt="Logo" width="125" height="100"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="beerStyles.php">Beer Styles</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="about.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About Us
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="location.php">Brewery Location</a></li>
            <li><a class="dropdown-item" href="basics.php">Brewing Basics</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="about.php">About the Brewer</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form><br>
      <div style="padding-left: 25px;">
      <form class="d-flex" method='post' action="">
            <button class="btn btn-outline-success" type="submit" value="Logout" name="but_logout">Logout</button>
        </form>
        </div>
    </div>
  </div>
</nav>
<!-- NavBar End -->

<!-- Body Start -->
<?php
echo "Welcome, " . $_SESSION['uname'] . "!";
?>
<br>
<div class="right">
<a type="button" class="btn btn-warning btn-lg" style="float: right;" href="recipeAdd.php">Add New Recipe</a>
</div>

<?php
$sql = "SELECT username, rName, Style, Abv, Ibu, BrewerNames, Notes FROM recipes";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Username: ". $row["username"]. " - Recipe Name: ". $row["rName"]. " - Style " . $row["Style"] . " - Abv: ". $row["Abv"]. " - Ibu: ". $row["Ibu"]. " - Brewer Names: ". $row["BrewerNames"]. " - Notes: ". $row["Notes"]. "<br>";
    }
} else {
    echo "0 results";
}

$con->close();
?>

<!-- Body End -->


<!-- Footer Start -->
<footer>
    <!-- Grid container -->
  <div class="container p-4 pb-0 text-center"><hr>
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="bi bi-facebook"></i>
    </a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #f74d5e;"
        href="#!"
        role="button"
        ><i class="bi bi-instagram"></i>
    </a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="https://www.linkedin.com/in/wesley-emberlin-1938939b/"
        role="button"
        ><i class="bi bi-linkedin"></i>
    </a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="bi bi-github"></i>
    </a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 text-white" style="background-color: #2e302f;">
    © 2022 Copyright: Austin Emberlin with
    <a class="text-white" href="https://bpbrewing.com/">bpbrewing.com</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>