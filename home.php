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
  </head>
<body class="bgcolor">
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
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form><br>
      <div style="padding-left: 25px;">
      <form class="d-flex" method='post' action="">
            <button class="btn btn-outline-warning" type="submit" value="Logout" name="but_logout">Logout</button>
        </form>
        </div>
    </div>
  </div>
</nav>
<!-- NavBar End -->

<!-- Body Start -->

<div>
<img src="photos/beers.webp" alt="Five Beers aligned on a counter." width="100%">
</div>
<div class="container p-4 pb-0 text-center">
<?php
echo "<p class='username'>Welcome, " . $_SESSION['uname'] . "!</p>";
?>
<hr>
</div>
<div class="margin-right">
<div class="right">
<a type="button" class="btn btn-warning btn-lg"  href="recipeAdd.php">Add New Recipe</a>
</div>
</div>
<br><br>
<div>
<?php
//Recipe query and array placement
$sql = "SELECT * FROM recipes";
$recipeResult = mysqli_query($con, $sql);
$recipeJsonArray = array();
while($row = mysqli_fetch_assoc($recipeResult)){
  $recipeJsonArray[] = $row;
}

?>
<div class="container mt-3">
<table class="table table-bordered table-warning">
  <thread>
    <tr>
      <th>Username</th>
      <th>Recipe Name</th>
      <th>Style</th>
      <th>ABV %</th>
      <th>IBU</th>
      <th>Notes</th>
      <th>Brewer</th>
    </tr>
</thread>
<tbody id="recipeList">
  
</tbody>
</table>

<script>
    //convert data to JSON and display in a table
var recipes = <?php echo json_encode($recipeJsonArray); ?>;
var arrayLength = recipes.length;

    for (var i = 0; i < arrayLength; i++) {
    var recipeTable = document.getElementById("recipeList");
    var row = document.createElement("tr");

    for (var j = 0; j < 1; j++) {
    var cell1 = document.createElement("td");
    cell1.innerHTML = recipes[i].username;
    row.appendChild(cell1);

    var cell2  =  document.createElement('td');
    cell2.innerHTML = recipes[i].rName;
    row.appendChild(cell2);

    var cell3  =  document.createElement('td');
    cell3.innerHTML = recipes[i].Style;
    row.appendChild(cell3);

    var cell4  =  document.createElement('td');
    cell4.innerHTML = recipes[i].Abv;
    row.appendChild(cell4);

    var cell5  =  document.createElement('td');
    cell5.innerHTML = recipes[i].Ibu;
    row.appendChild(cell5);

    var cell6  =  document.createElement('td');
    cell6.innerHTML = recipes[i].Notes;
    row.appendChild(cell6);

    var cell7  =  document.createElement('td');
    cell7.innerHTML = recipes[i].BrewerNames;
    row.appendChild(cell7);
  }
recipeTable.appendChild(row);
}
</script>
</div>
</div>
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