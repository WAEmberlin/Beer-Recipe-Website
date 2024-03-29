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
    <title>Beer Styles</title>
        <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">    
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
          <a class="nav-link" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="beerStyles.php">Beer Styles</a>
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

<!-- Styles Start -->
<div class="container p-4 pb-0 text-center"><hr>
<h1>Beer Styles</h1>
<hr>
</div>

<!-- American Amber Ale -->
<div class="card mb-3 margin-left" style="max-width: 90%;">
  <div class="row g-0 gldbgcolor">
    <div class="col-md-4">
      <img src="photos/AmberAle.png" class="img-fluid rounded-start" alt="American Amber Ale">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">American Amber Ale</h5><hr>
        <p class="card-text">Like most amber beers, American amber ale is named after the golden to amber color this 
American version of English pale ale exhibits. The color is derived from the use of caramel 
and crystal malt additions, which are roasted to provide amber beers with the color, body and 
flavor many beer fans have come to appreciate. Falling under the ale beer type, amber ales ferment 
at warmer temperatures for what is typically a much shorter amount of time than lager style beers.</p>
        <p class="card-text">The American amber ale is one of the most widely enjoyed styles throughout the United States 
and serves as a cornerstone style of the American craft brewing revolution. 
American ambers are darker in color than their pale ale cousins, the presence of caramel
 and crystal malts lending a toasted, toffee flavor, along with the perception of a 
 fuller body when compared to beers without such malts. Amber beer showcases a medium-high 
 to high malt character with medium to low caramel character derived from the use of roasted 
 crystal malts. The American amber is characterized by American-variety hops, which 
 lend the amber ale notes of citrus, fruit and pine to balance the sweetness of the malt.</p>
 <p class="card-text">As with many amber beer types, American amber ale is a highly versatile 
companion to American cuisine, particularly foods that are grilled or barbecued, 
as roasted malts complement seared, charred and caramelized proteins making this ale 
beer type a perennial favorite at backyard cookouts.</p><hr>
      </div>
    </div>
  </div>
</div>

<!-- American Porter -->
<div class="card mb-3 margin-left" style="max-width: 90%;">
  <div class="row g-0 gldbgcolor">
    <div class="col-md-4">
      <img src="photos/porter.jpg" class="img-fluid rounded-start" alt="American Porter Beer">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">American Imperial Porter</h5><br><br><hr>
        <p class="card-text">Definitively American, the imperial porter should have no roasted barley flavors or 
strong burnt/black malt character. Medium caramel and cocoa-like sweetness is present, 
with complementing hop character and malt-derived sweetness.</p>
        <p class="card-text"></p>May include very low to low complex alcohol flavors and/or lager fruitiness such as berries, grapes, plums, but not banana; ale-like fruitiness from warm temperature fermentation is not appropriate.<hr>
      </div>
    </div>
  </div>
</div>


<!-- American India Pale Ale -->
<div class="card mb-3 margin-left" style="max-width: 90%;">
  <div class="row g-0 gldbgcolor">
    <div class="col-md-4">
      <img src="photos/IPA.png" class="img-fluid rounded-start" alt="American Porter Beer">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">American India Pale Ale</h5><br><br><br><hr>
        <p class="card-text">Characterized by floral, fruity, citrus-like, piney or resinous American-variety hop character, 
the IPA beer style is all about hop flavor, aroma and bitterness. This has been the most-entered 
category at the Great American Beer Festival for more than a decade, and is the top-selling craft 
beer style in supermarkets and liquor stores across the U.S.</p>
        <p class="card-text"></p>Medium-high to very high hop aroma and flavor are present, with attributes typical of hops 
        from any origin. Descriptors such as "juicy" are often used to describe the taste and 
        aroma hop-derived attributes present in these beers.<hr>
      </div>
    </div>
  </div>
</div>


<!-- American Pale Ale -->
<div class="card mb-3 margin-left" style="max-width: 90%;">
  <div class="row g-0 gldbgcolor">
    <div class="col-md-4">
      <img src="photos/PaleAle.png" class="img-fluid rounded-start" alt="American Amber Ale">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">American Pale Ale</h5><hr>
        <p class="card-text">Like many others that have become known as classic American beers, the American pale ale 
can trace its roots to beer styles from abroad. The American pale ale beer was inspired 
by the English pale ale, replacing its English counterpart’s earthy, herbal hops with 
generous additions of boldly citrus and pine-like American varieties. As one of the most 
popular American beer styles, pale ale beer is not hard to track down, but the various 
takes on this iconic style by just as many American craft brewers makes it impossible to 
jam everything there is to know about American pale ale beer on one page, but we’ll do our best.</p>
<br><p class="card-text">Characterized by floral, fruity, citrus-like, piney, resinous American hops, the American 
pale ale is a medium-bodied beer with low to medium caramel, and carries with it a toasted 
maltiness. American pale ale is one of the most food-friendly styles to enjoy, since the pale 
ale works wonderfully with lighter fare such as salads and chicken, but can still stand up to 
a hearty bowl of chili; a variety of different cheeses, including cheddar; seafood, like 
steamed clams or fish, and even desserts. The American pale ale’s affinity to food can be 
attributed to the simplicity of its ingredients, which include toasty pale malt, a clean 
fermenting ale beer yeast, and the counterbalance of American hops to help tease out the 
flavor or cleanse the palate, preparing you for another bite.</p>
       <hr>
      </div>
    </div>
  </div>
</div>


<!-- American Stout -->
<div class="card mb-3 margin-left" style="max-width: 90%;">
  <div class="row g-0 gldbgcolor">
    <div class="col-md-4">
      <img src="photos/stout.jpg" class="img-fluid rounded-start" alt="American Amber Ale">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">American Stout</h5><hr>
        <p class="card-text">American stout beer is perhaps one of the most identifiable creations of the American beer world. 
Stout beer is about as dark of an American beer as can be, and has a very noticeable of appearance, 
aroma and flavor. As one of the thicker, darker American beers on the craft beer scene, American 
stout beer is perfect for the colder seasons. The American stout beer style blends generous amounts of 
dark malts with American hops to offer an adventurous experience that is unmatched by other styles 
of beer. Allow your senses to run wild with this deceivingly sophisticated take on a European staple.</p>
        <p class="card-text">Like many other beer styles that have become prized by American brewers and beer lovers alike, 
American stout is a distinct variant of a European stout beer counterpart. American 
stouts showcase generous quantities of the American hops fans have come to expect. American stout can be enjoyed year-round but is commonly considered a beer 
for the fall or winter months.</p><hr>
      </div>
    </div>
  </div>
</div>

<!-- Styles End -->

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