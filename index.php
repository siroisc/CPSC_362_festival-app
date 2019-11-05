<!DOCTYPE html>
<html lang="en">
<title>FestApp</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

  img {margin-bottom: -7px}
  .w3-row-padding img {margin-bottom: 12px}
  body {font-family: "Lato", sans-serif}
  .mySlides {display: none}

  .container {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
  border-radius: 5px;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: white;
}

.container:hover .overlay {
  opacity: 0.75;
}

.text {
  color: black;
  font-size: 2.5em;

  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}


  h1{
    margin-left: 50px;
  }
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="festivals.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">FESTIVALS</a>
    <a href="areas.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONNECT</a>
    <a href="" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">ABOUT US</a>
        <a href="#" class="w3-bar-item w3-button">EXTRAS</a>
        <a href="#" class="w3-bar-item w3-button">MEDIA</a>
      </div>
    </div>
  <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Logo -->
<div class="logo"style="margin-top:100px;">
  <h1>FestApp</h1>
</div>




<!-- Area Select -->
<div class="w3-container"style="margin-top:50px;">
  <div class="row">
    <div class="column">
      <a href="bay_area.php"><div class="container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/GoldenGateBridge-001.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <div class="text">Bay Area</div>
          </div>
      </div></a>
    </div>
    <div class="column">
      <a href="LA.php"><div class="container">
        <img src="https://www.discoverlosangeles.com/sites/default/files/styles/hero/public/images/2019-02/DT_Skyline_01_L_0418.jpg?itok=NlvIQDy9" alt="Avatar" class="image">
          <div class="overlay">
            <div class="text">Los Angeles</div>
          </div>
      </div></a>
    </div>
    <div class="column">
      <a href="SD.php"><div class="container">
        <img src="https://images.unsplash.com/photo-1519954352454-2d5a7353e277?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="Avatar" class="image">
          <div class="overlay">
            <div class="text">San Diego</div>
          </div>
      </div></a>
    </div>
  </div>
</div>







   <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/jquery.csv.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
   <script type="text/javascript" src="js/csv_to_html_table.js"></script>

<script>



// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}




</script>

</body>
</html>

