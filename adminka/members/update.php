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
	    <title>Adminka -News</title>
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
	              	<li > <a href="index.php">Members</a> </li>
	                <li class="active"> <a href="update.php">Update User ACC</a> </li>
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
				<p class="text-center">Users to update:</p>
				<form action = "update.php" method = "get">
					<?php
							
					
					$result = mysqli_query($main->construct(),"SELECT * FROM user")or die(mysql_error());
						$i = 0;
						echo "<table>";
						echo "<tr>";
							echo "<td width='100px' align = 'center'><div  align = 'left' ><b>NR</b></td>";
							echo "<td width='150px' align = 'center'><div  align = 'left'><b>  Login</b></td>";
							echo "<td width='100px'  align = 'center'><div  align = 'left'><b>Name</b></td>";
							echo "<td width='100px'  align = 'center'><div  align = 'left'><b>Surname</b></td>";
							echo "<td width='100px'  align = 'center'><div  align = 'left'><b>Email</b></td>";
							echo "</tr>";
						while($row = mysqli_fetch_array($result)) {
						$i++;
							echo "<tr>";
							echo "<td width='100px' align = 'center'><div  align = 'left' ><b>{$i}.</b></td>";
							echo "<td width='150px' align = 'center'><div  align = 'left'><b>  {$row['Login']}</b></td>";
							echo "<td width='100px'  align = 'center'><div  align = 'left'><b>{$row['Name']}</b></td>";
							echo "<td width='100px'  align = 'center'><div  align = 'left'><b>{$row['Surname']}</b></td>";
							echo "<td width='100px'  align = 'center'><div  align = 'left'><b>{$row['Email']}</b></td>";
							echo "<td width='100px' align='Right'><a href='update.php?iduser={$row['iduser']}'>Update</a></td>";
							echo "</tr>";
							
						}
						echo "</table><hr/>";
					
						
					if(isset($_GET['iduser'])){
						$test = $_GET['iduser'];	
						$result = mysqli_query($main->construct(),"SELECT * FROM user WHERE iduser = $test");
						while($row = mysqli_fetch_array($result)) {
								$Up_Login =  $row['Login'];
								$Up_Name = $row['Name'];
								$Up_Surname = $row['Surname'];
								$Up_email = $row['Email'];

						}		
						

					
					?>
						<br/>
						<div class="form-group">
								  <label for="Login">Login:</label>
								  <input type="text" value = "<?php echo $Up_Login ?>" name = "Login_update">
						</div>
						<hr>
						<div class="form-group">
								  <label for="Name">Name:</label>
								  <input type="text" value = "<?php echo $Up_Name ?>" name = "Name_update">
						</div>
						<hr>
						<div class="form-group">
								  <label for="Surname">Surname:</label>
								  <input type="text" value = "<?php echo $Up_Surname ?>" name = "Surname_update">
						</div>
						<hr>
						<div class="form-group">
								  <label for="Email">Email:</label>
								  <input type="text" value = "<?php echo $Up_email ?>" name = "Email_update">
						</div>
						<hr>

						<input type = 'hidden' name = "id_back" value = '<?php echo $test ?>'/>
						
						<input type = "submit" value = "SAVE UPDATE!" name = "save"/>
			
					<?php
						}
						if(isset($_GET['save'])) {
							$id = $_GET['id_back'];
							$LU = $_GET['Login_update'];
							$NU = $_GET['Name_update'];
							$SU = $_GET['Surname_update'];
							$EU = $_GET['Email_update'];							

							$result = mysqli_query($main->construct(),"UPDATE user SET 
							Login = '$LU',
							Name=  '$NU',
							Surname = '$SU',
							Email = '$EU'
							WHERE iduser = '$id'")or die(mysql_error());
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