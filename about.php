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
    <link rel="stylesheet" type="text/css" href="main.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  
    <script src="forms.js"></script>   
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </head>
<body onload="javascript:getName()">

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
          <a class="nav-link" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="beerStyles.php">Beer Styles</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="about.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
echo "Username: " . $_SESSION['uname'];
?>

<div class="container-fluid padding">
<div class="row welcome text-center">
  <hr>  
  <div>
    <form>
      <h4 id="name" style="text-align:center;"></h4>
      <h4>Enter your current city and state then click "Submit", please.</h4>
        <label for="city">City:</label>
          <input type="text" id="city" onkeyup="countCharacters(city, 'cityCharacterCount', 30);"><br>
            <span id="cityCharacterCount" class="characterLimit">0 characters</span><br>
        <label for="state">State:</label>
          <input type="text" id="state" onkeyup="countCharacters(state, 'stateCharacterCount', 30);"><br>
            <span id="stateCharacterCount" class="characterLimit">0 characters</span><br><br>
        <button type="button" onclick="displayLocation()">Submit</button>
    </form>
  </div> 
    <br><hr>
	<div class="col-12">
    <img src="photos/austin.jpg" alt="A picture of Austin" id="photo" width="400" height="400" onmouseover="photoChange()">
      <hr>
    <h1 class="display-4 fontM">Wesley "Austin" Emberlin</h1>
	</div>
	<hr>
	<div class="col-12">
	  <p class="lead">Hello there and welcome to my portfolio website. My name is Austin Emberlin and I currently attend Kansas State University. I am working towards obtaining an associate of science degree in Website Development Technology and a bachelor of science degree in Engineering Technology - Machine Learning and Autonomous Systems. I plan to one day be a Machine Learning Engineer and to obtain a masters degree in Integrated Systems Designs and Dynamics - Machine Learning and Autonomus Systems. I am currently a full-time data analyst for Brink's. My main hobby is homebrewing delicious craft beer. Below you will find my resume.</p>
	</div>
</div>
</div>
  
<!-- Jumbotron -->
<div class="container-fluid">
	<div class="row jumbotron">
		<embed src="files/Resume.pdf" type="application/pdf" width="100%" height="600px" />
	</div>
</div>

<!-- Body End -->


<!-- Footer Start -->
<footer>
    <!-- Grid container -->
  <div class="container p-4 pb-0 text-center"><hr>
    <!-- Section: Social media -->
    <section>
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
 
  <!-- Copyright -->
  <div class="text-center p-3 text-white" style="background-color: #2e302f;">
    © 2022 Copyright: Austin Emberlin with
    <a class="text-white" href="https://bpbrewing.com/">bpbrewing.com</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>