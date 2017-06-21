<?php
include("./assets/php/config.php");
$main = new DB_class();
$main->construct();
$main->check();
session_start();
if(!isset($_SESSION['login']))
{ header("location:login.php"); }

?>


<!--HTML-->
<html lang= "en">

<!--Head-->
  <head>
    <meta charset= "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href= "assets/css/bootstrap.css">
    <link rel= "stylesheet" href= "assets/css/css.css">
    <script src= "assets/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel= "stylesheet" href= "https://www.w3schools.com/w3css/4/w3.css">
    <title>J4F - WoW</title>
  </head>

<!--Body-->
<body>

<!--Navigation Bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php">HOME<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="index.php">HOME</a></li>
          <li><a href="profile.php">PROFILE</a></li>
          <li><a href="about.php">ABOUT</a></li>
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

<!--Top Background-->
    <header>
        <div class= "bg-wow">
        </div>
    </header>

<!--Navigation Bar bottom-->
<div class="w3-bottom w3-hide-small">
    <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min">
      <a href="profile.php" class="w3-bar-item w3-button">
        <?php 
          echo "Hello: {$_SESSION['login']}<br/>";
        ?>
      </a>
      <ul>
      <?php 
        if(($_SESSION['Root']) == 1)
          { echo  '<a href="adminka/index.php" class="w3-bar-item w3-button navbar-right">Hello ADMIN!</a>'; }
      ?>
      </ul>
    </div>
</div>


<!--Container-->
    <div class="container-fluid text-center">
    <div class="row content">
    <?php
      $res = mysqli_query($main->construct(),"SELECT a.Title as 'TitleArt', a.Author, a.Content, a.Date,c.Title FROM articles as a inner join category as c on a.category_category_id = c.category_id where c.Title = 'WoW' order by idArticles desc limit 5 ");
      while ($row = mysqli_fetch_array($res) ){
          $text = $row['Content'];
          $newtext = wordwrap($text, 100, "<br />\n");
        echo "<br /> <h1 class= 'article-h1'>". $row['TitleArt'] . "</h1>";  
        echo "<p class= 'author'>Author: ". $row['Author'] . "</p> <br >";
        echo "<p class= 'content'>".$newtext."</p><br> ";
        echo "<p class= 'date'>Date: " . $row['Date']."<br><br>";
    }
    ?>
      <div class="col-sm-2 sidenav"></div>
        <div class="col-sm-8 text-left">
        </div>
      <div class="col-sm-2 sidenav"></div>
    </div>
  </div>

<!--Footer-->
  <footer class="container-fluid text-center">
    <p>Powered by J4F Team</p>
  </footer>

<!--Footer going through bottom navigation bar-->
  <div class="w3-hide-small" style="margin-bottom:32px"> </div>

<!--End of body-->
  </body>

<!--End of HTML-->
</html>
