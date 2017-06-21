<?php
include("./assets/php/config.php");
$main = new DB_class();
$main->construct();
$main->check();
session_start();
if(!isset($_SESSION['login']))
{ header("location:login.php"); }

?>


<html>
<head>
  <meta charset= "utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel= "stylesheet" href= "assets/css/bootstrap.css">
  <link rel= "stylesheet" href= "assets/css/css.css">
  <script src= "assets/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel= "stylesheet" href= "https://www.w3schools.com/w3css/4/w3.css">
  <title>J4F - Contact</title>
</head>

  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
        </div>
        <ul class="nav navbar-nav">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="about.php">ABOUT<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="index.php">HOME</a></li>
              <li><a href="profile.php">PROFILE</a></li>

            </ul>
          </li>
          <li><a href="lol.php">LOL</a></li>
          <li><a href="wow.php">WOW</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <form action = "index.php" method = "post">
      <button type = "submit" name = "exit" class="btn btn-danger navbar-btn">LOGOUT</button>
      </form>
      <?php
      if(isset($_POST["exit"])){
        session_destroy();
        header("Location:login.php");
      }
    ?>
        </ul>
      </div>
    </nav>

    <header>
        <div class= "bg-about">
          <div class= "caption-about">
            <span class= "border1">ABOUT</span><span class= "border2">US</span>
          </div>
        </div>
    </header>

    <div class="container-fluid text-center">
      <div class="row content">
        <article>
          <br><br>
        <h1 class= "article-h1">WHO ARE WE?</h1>
            <p class= "content">We are student from RVT, our team is called Just4Fun.</p>
            <p class= "content">This is our website called League of Warcraft.</p>
            <p class= "content">If you have any interest in League of Legends and World of Warcraft then you will feel like at home</p>
            <p class= "content">Here you can find latest news about this 2 games</p>
              <br><br>
        </article>
        <article>
        <h1 class= "article-h1">WHAT ARE THIS GAMES?</h1><br>
        <p class= "content">LEAGUE OF LEGENDS</p>
        <p class= "content">League of Legends (abbreviated LoL) is a multiplayer online battle arena video game developed and published by Riot Games for Microsoft Windows and macOS.</p>
        <p class= "content">In League of Legends, players assume the role of an unseen "summoner" that controls a "champion" with unique abilities and battle against a team of other players or computer-controlled champions.</p>
        <p class= "content">The goal is usually to destroy the opposing team's "nexus", a structure which lies at the heart of a base protected by defensive structures, although other distinct game modes exist as well.</p><br><br>
        <p class= "content">WORLD OF WARCRAFT</p>
        <p class= "content">World of Warcraft (WoW) is a massively multiplayer online role-playing game (MMORPG) released in 2004 by Blizzard Entertainment.</p>
        <p class= "content">It is the fourth released game set in the fantasy Warcraft universe, which was first introduced by Warcraft: Orcs and Humans in 1994.</p>
        <p class= "content">With a peak of 12 million subscriptions in October 2010 and Blizzard's final report of 5.5 million subscriptions in October 2015, World of Warcraft remains the world's most-subscribed MMORPG.</p><br><br>
        <p class= "desclaimer">Some of the information was taken from <a href="https://www.wikipedia.org/">wiki</a>.</p>
        <br><br>
        </article>
        <div class="col-sm-2 sidenav"></div>
          <div class="col-sm-8 text-left">
          </div>
        <div class="col-sm-2 sidenav"></div>
      </div>
    </div>

        <div class= "bg-about1">
          <div class="container-fluid text-center">
            <div class="row content">
               <article>

                <br><br>

                  <h1 class= "article-h1-black">CONTACT</h1>

                   <br>

			              <p class= "content-white">Inese Putnina aka PUTNINJA (Project Leader): 030797@inbox.lv</p>

			               <p class= "content-white">Alexey Muzichenko (Senior): almuz@inbox.lv</p>

			                <p class= "content-white">Ruslan Nazarov (Junior): noahcore95@gmail.com</p>

			                 <p class= "content-white">Ruslan Rezanov (Designer): ruslan.rezanov2013@gmail.com</p>

                </article>
          </div>
        </div>
      </div>

<div id="googleMap" style="height:400px;" class="grey-map"></div>
      <script>
function myMap() {
  myCenter=new google.maps.LatLng(56.9529552, 24.1040067);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: true, draggable: true,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDed7_nVWG-KbybHA2TBZi4LEyTmABdxv0&callback=myMap"></script>

<footer class="container-fluid text-center">
  <p>Powered by J4F Team</p>
</footer>



  </body>
</html>
