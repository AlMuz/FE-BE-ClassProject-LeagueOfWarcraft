<?php
include("../../assets/php/config.php");
$main = new DB_class();
$main->construct();
$main->check();
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
	    <title>Adminka - Update News</title>
	    <!-- Bootstrap -->
	    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	    <!-- Main Style -->
	    <link href="../assets/css/style.css" rel="stylesheet">
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="../assets/js/bootstrap.min.js"></script>
	    <script src="../assets/js/jquery.js"></script>
	    <script src="../assets/js/form.js"></script>

		   
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
	              	<li> <a href="index.php">News</a> </li>
	                <li > <a href="add.php">Add News</a> </li>
	                <li class="active"> <a href="update.php">Update News</a> </li>
	                <li> <a href="delete.php">Delete News</a> </li>
	                <li> <a href="../index.php">Back</a> </li>
	                <li> <a href="../../index.php">Back to normal page</a> </li>

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
				<p class="text-center">Articles titles to update:</p>
				<form action = "update.php" method = "get">
					<?php
					
					$result = mysqli_query($main->construct(),"SELECT * FROM articles")or die(mysql_error());
						$i = 0;
						echo "<table>";
							echo "<tr>";
							echo "<td width='100px' align = 'center'><div  align = 'left' ><b>NR</b></td>";
							echo "<td width='150px' align = 'center'><div  align = 'left'><b>Title</b></td>";
							echo "<td width='auto'  align = 'center'><div  align = 'left'><b>Content</b></td>";
							echo "</tr>";
						while($row = mysqli_fetch_array($result)) {
						$i++;
							echo "<tr>";
							echo "<td width='100px' align = 'center'><div  align = 'left' ><b>{$i}.</b></td>";
							echo "<td width='150px' align = 'center'><div  align = 'left'><b>  {$row['Title']}</b></td>";
							echo "<td width='auto'  align = 'center'><div  align = 'left'><b>{$row['Content']}</b></td>";
							echo "<td width='50px'align = 'right'><a href='update.php?idArticles={$row['idArticles']}'>Update</a></td>";
							echo "</tr>";
							
						}
						echo "</table><hr/>";
					
						
					if(isset($_GET['idArticles'])){
						$test = $_GET['idArticles'];	
						$result = mysqli_query($main->construct(),"SELECT * FROM articles WHERE idArticles = $test");
						while($row = mysqli_fetch_array($result)) {
								$Up_Title =  $row['Title'];
								$Up_Content = $row['Content'];
						}		

						
					?>
						<br/>
						<div class="form-group">
								  <label for="Title">Title:</label>
								  <input type="text" value = "<?php echo $Up_Title ?>" name = "Title_update">
						</div>
						<hr>
						<div class="form-group">
						  <label for="comment">Content:</label>
						  <textarea  class="form-control" rows="5" name = "Content_update"><?php echo $Up_Content?></textarea>
						</div>
						<input type = 'hidden' name = "id_back" value = '<?php echo $test ?>'/>
						<hr>
						<input type = "submit" value = "SAVE UPDATE!" name = "save"/>
			
					<?php
						}
						if(isset($_GET['save'])) {
							$id = $_GET['id_back'];
							$TU = $_GET['Title_update'];
							$CU = $_GET['Content_update'];

							$result = mysqli_query($main->construct(),"UPDATE articles SET 
							Title = '$TU',
							Content=  '$CU'
							WHERE idArticles = '$id'")or die(mysql_error());
							header("location:update.php");
						}

					
					?>
				</form>
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