<!DOCTYPE html>
<html lang="en">
<title>FestApp</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BAND</a>
    <a href="#events" class="w3-bar-item w3-button w3-padding-large w3-hide-small">EVENTS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Merchandise</a>
        <a href="#" class="w3-bar-item w3-button">Extras</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>

<!-- Page content -->
<div class="w3-content" >

  <div class="container">


  <!-- Automatic Slideshow Images -->
    <div class="mySlides w3-display-container w3-center">
      <img src="https://edmmaniac.com/wp-content/uploads/2019/05/CalderWilsonEDC19.jpeg" style="width:100%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3>Electric Daisy Carnival</h3>
        <p><b>Las Vegas, Nevada</b></p>

      </div>
      <button class="w3-button w3-white w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-white w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
    </div>
    <div class="mySlides w3-display-container w3-center">
      <img src="https://www.youredm.com/wp-content/uploads/2017/10/countdown-nye_alive-coverage-for-insomniac.jpg" style="width:100%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3>Countdown</h3>
        <p><b>San Bernadino, California</b></p>
      </div>
      <button class="w3-button w3-white w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-white w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
    </div>
    <div class="mySlides w3-display-container w3-center">
      <img src="https://www.magneticmag.com/.image/t_share/MTU5ODQyMDIwMTYzMDY5MDg1/sg17_jorgphoto_jp2_1844-copy.jpg" style="width:100%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3>Snowglobe</h3>
        <p><b>Lake Tahoe, California</b></p>
      </div>
      <button class="w3-button w3-white w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-white w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
    </div>

  </div>
  <!-- The Tour Section -->
 <div class="w3-black" id="events">
   <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
     <h2 class="w3-wide w3-center">Upcoming Events</h2>
        <div id='table-container'></div>


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
// Automatic Slideshow - change image every 4 seconds
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

function format_link(link){
  if (link)
  return "<a href='" + link + "' target='_blank'>" + link + "</a>";
  else
    return "";
  }

  CsvToHtmlTable.init({
    csv_path: '/data/events.csv',
    element: 'table-container',
    allow_download: false,
    csv_options: {separator: ',', delimiter: '"'},
    datatables_options: {"paging": false},
    custom_formatting: [[4, format_link]]
      });

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}



// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
