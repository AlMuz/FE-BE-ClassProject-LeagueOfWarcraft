<?php
include("../assets/php/config.php");
session_start();

if(($_SESSION['Root']) != 1)
	{header("location:../login.php");  
}
?>



<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Adminka</title>
	    <!-- Bootstrap -->
	    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	    <!-- Main Style -->
	    <link href="assets/css/style.css" rel="stylesheet">
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="assets/js/bootstrap.min.js"></script>
	    <script src="assets/js/jquery.js"></script>
	    <script src="assets/js/form.js"></script>
		   
		<!--For html 5  outliner -->
		<h1 class="hide">Diss</h1>
  	</head>
  	<body>
	    <div class="container-fluid">
	      <div class="row">
	       
	       <nav role="navigation" class="navbar navbar-inverse">
	          <div class="container">

	          <div class="navbar-header header">

	            <div class="container">
	              
	              <div class="row">
	                <header>
	                	<div class="col-lg-12">
	                  		<h1><a href="index.php"><?php echo "{$_SESSION['login']}<br/>"; ?></a></h1> 
	                	</div>
	                </header>
	              </div>

	            </div>

	            
	            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	              <span class="sr-only">Navigation</span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	            </button>
	          

	          </div>
	            
	            <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
	              
	              <ul class="nav nav-pills">
	                <li> <a href="news/index.php">News</a> </li>
	                <li> <a href="members/index.php">Members</a> </li>
	                <li> <a href="../index.php">Back to normal page</a> </li>

	              </ul>


	            </div>

	          </div>
	       </nav> 

	        </div>
	      </div>
	      <section class = "row" >
	      <aside class = "col-md-2 hidden-xs">
	          <h1 class="hide">1 Kolonna </h1>
	          
	      </aside>
	        <main class="col-md-8 " >
		 	<li> <a href="news/index.php">News</a> </li>
	        <li> <a href="members/index.php">Members</a> </li>	


	


	        </main>
			
	      	<aside class="col-md-2 hidden-xs">
	        	<h1 class="hide">3 Kolonna</h1>
	      	</aside>
	      </section>

	    <footer >
	      	<div class="container">
	      		<hr>
	        	<p class="text-center"> Admin Panel </p></br>
	      	</div>
	    </footer>
  	</body>
</html>