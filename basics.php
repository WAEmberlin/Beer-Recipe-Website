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
    <title>Beer Brewing Basics</title>
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
          <a class="nav-link" href="beerStyles.php">Beer Styles</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  active" href="about.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About Us
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="location.php">Brewery Location</a></li>
            <li><a class="dropdown-item  active" href="basics.php">Brewing Basics</a></li>
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

<!-- Basics Start -->
<div class="container p-4 pb-0 text-center"><hr>
<h1>Beer Brewing Basics</h1>
<hr>
</div>

<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Malt Milling
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong>To make beer, sugar is needed, and we get sugar from sprouted barley.</strong> 
          <p>The fermentable sugar in the malt is contained in the outer shell of the 
          inner core, which is starch at this time. Now we need to open the shell to 
          expose the starch for transformation. When buying a grinder for brewing, 
          it is best to buy a grinder with an adjustable drum. This way you can control 
          the degree of malt grinding. When the malt is ground too finely, it will make 
          the wort become mushy and will cause difficulty in filtering, making it difficult 
          to collect the malt mash (wort) into the next brewing vessel.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Mashing
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <strong>Saccharification is the mixing of ground malt and hot water to convert the starch in the grain into fermentable sugar. </strong> 
        <p>The mashing process is called infusion mash if it is completed at a temperature. 
          This is common in British ale beer brewing where saccharification is performed at 65°C. 
          Then the mash is kept at 65°C for one hour, and the maltose is released from the grain 
          through the action of the enzyme in the malt. However, with some beers, it’s best 
          to perform a step mash. In a step mash, the temperature of the mash bed is raised, 
          allowing the different parts of the starchy endosperm to be broken down.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Lautering
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <strong>Through filtering, you can spray fresh hot water on the mash to wash away the remaining sugar. </strong> 
        <p>If it is not rinsed, a lot of sugar will remain in the malt. Moreover, filtration can 
          enable you to obtain a good extraction efficiency. You’d better put the clear wort into 
          the brewing pot. When filtering, it is necessary to match the incoming water with the 
          outgoing wort. If you add water too slowly, it may cause the mash bed to dry out. 
          If you add water too quickly, your mash may overflow. These conditions will cause 
          problems on your brewing day and affect your efficiency.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
        Wort Boiling
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
      <div class="accordion-body">
        <strong>The key process of brewing beer while boiling, a lot of interesting things happen here.</strong> 
        <p>Boiling will stop the activity of the enzyme – mashing can stop the activity of the 
          enzyme very well, and boiling is to completely inactivate the enzyme. It allows you 
          to have a fixed wort composition in the fermentation tank (FV). Sterilizing the wort – boiling 
          wort can eliminate unwanted microorganisms, leaving a clean and beautiful wort for the yeast 
          to work. Adding hops – hops contain alpha acids that make beer bitter. You need to boil 
          the hops in the wort to isomerize the alpha acids in the hops. Through isomerization, 
          the α-acid becomes “iso-α-acid”, which is easier to dissolve, and therefore it is 
          easier to impart a bitter taste to the beer. Evaporation of volatiles – Barley produces 
          a compound called s-methyl-methionine (SMM) when it germinates. SMM is the precursor 
          of the terrible dimethyl sulfide (DMS), which gives the beer a corn-like aroma and 
          flavor. A good boiling will remove SMM, so DMS rarely appears in your beer. Boiling 
          will condense protein – when you boil, it will cause the wort protein to combine with 
          tannins and form clumps. During the boiling process, these clumps will gradually become 
          larger. When the clumps become large enough, they sink to the bottom of the container.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
        Clarification
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
      <div class="accordion-body">
        <strong>There are two points in the kettle where proteins coagulate.</strong> 
        <p>One is the “hot break” which happens at the start of the boil, you might see it as 
          scum forming on top of the wort. Then there’s the “cold break” when the wort is rapidly 
          chilled on the way to the fermentation tank and looks a bit like Miso soup. Furthermore, 
          in most modern breweries, brewhouse “whirlpool” after the boil as well. This helps clear 
          the wort too. When brewers’ whirlpool, the wort is pumped very fast creating well…a 
          “whirlpool”. It allows the hops and trub to form a cone in the center of the 
          kettle/whirlpool. Which is left behind when you pump the wort out of the kettle to the 
          fermentation tank from a point above the trub cone.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
        Cooling
      </button>
    </h2>
    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
      <div class="accordion-body">
        <strong>After the wort is boiled, it will be very hot and needs to be cooled before the yeast can be added and the fermentation process can begin. </strong> 
        <p>The clarified wort will pass through the heat exchanger to the fermentation tank. 
          Depending on the beer style, the wort cools quickly to 7-35°C as it passes through 
          the heat exchanger. The working principle of the heat exchanger is that cold water 
          or glycol passes through the cold water side of the heat exchanger, and the wort 
          enters from the hot water inlet on the other side, and then the cold water/glycol 
          will take away the heat in the wort. Although cold water/glycol cooled the wort, 
          they did not touch it.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
        Fermentation
      </button>
    </h2>
    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
      <div class="accordion-body">
        <strong>After the wort is cooled and introduced into the fermentation tank, you can start adding yeast.</strong> 
        <p>Fermentation begins when yeast is added to the wort. The first stage of fermentation 
          is also called primary fermentation. As the yeast becomes active, the yeast will begin 
          to enjoy the sugar in the wort and produce alcohol and carbon dioxide. As sugar is 
          converted to alcohol, the liquid will gradually change from sweet to finished beer. In 
          addition, depending on the yeast used, some phenolic and ester flavor compounds will 
          enter the beer. Hefeweizen-flavored beer contains isoamyl acetate and 4-vinyl guaiacol 
          in Belgian wheat beer. When the fermentation is carried out for 5 to 7 days, the 
          fermentation speed will be greatly slowed down. This is because the yeast has already 
          consumed the sugar and slowed down the speed. After completing the task, the yeast 
          will sink to the bottom of the fermentation tank, along with the sea oil hops, protein, 
          and other solid substances that sink. During this period, you can pour some solids that 
          have gathered at the bottom of the fermentation tank. But don’t dump too much, because 
          you may lose some precious yeast. The fermentation may have been completed by the time 
          the fermentation has proceeded for 7 to 10 days, but some styles of beer may take longer 
          to complete. When the fermentation is complete, the beer can be cooled to facilitate the 
          removal of more yeast and solids. The collected yeast can be used for the next brewing 
          or pouring. Next, the beer needs to be conditioned.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingEight">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
        Conditioning
      </button>
    </h2>
    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
      <div class="accordion-body">
        <strong>Fermentation is a very complicated process and sometimes leaves some unwanted sediment in the beer. </strong>
        <p>At this time, it is necessary to condition the beer to improve its clarity of the beer. 
          In addition, the beer that has just been fermented may also contain some flavor compounds
           that are not required for the beer flavor, and the conditioning process will try to 
           keep the unwanted flavor compounds below the flavor threshold. The conditioning process 
           will store the beer at 32-39.2°F (0-4°C), where the turbid proteins and polyphenols in 
           the beer will condense and drop to the bottom of the bright tank. In addition, the beer 
           will become more delicate and full-bodied during this period.</p> 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingNine">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
        Packaging
      </button>
    </h2>
    <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
      <div class="accordion-body">
        <strong>When the beer conditioning is complete, it can be packaged and sold.</strong> 
        <p>But before packaging and selling the beer, some checks are needed to ensure that the 
          beer meets specifications. There are many checks that may be required, but the main ones 
          are: DO (dissolved oxygen) – When the DO content in beer is high, the shelf life will be 
          affected, which will cause the beer to produce a papery taste. CO2 – You need to check 
          whether the beer is carbonated according to its style. Microorganisms – Make sure that 
          there are no offensive bacteria and microorganisms. Color and bitterness – Check whether 
          the color and bitterness of the beer meet specifications.</p>
      </div>
    </div>
  </div>
</div>
<hr>
<p>The above is the gradual decomposition of the brewing process, but it will be more complicated 
  in actual operation. This is just a simple introductory guide. After you have completed the above 
  operations, the beer is ready to be drunk, and I hope it can help you brew delicious beer.
This information is from <a href="https://www.micetcraft.com/brewing-process/">https://www.micetcraft.com/brewing-process/. </a></p>
<!-- Basics End -->

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