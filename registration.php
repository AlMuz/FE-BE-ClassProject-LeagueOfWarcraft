<?php
include("./assets/php/config.php");
$main = new DB_class();
$main->construct();
$main->check();
session_start();
if(isset($_SESSION['login']))
{ header("location:index.php"); }
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href = "assets/css/bootstrap.min.css">
	<link rel="styleshhet" href = "assets/css/css.css">
	<title>Registration</title>
	</head>
	<body>
		<section class="container-fluid">
			<header class="row">
				<div class="col-md-12"></div>
			</header>
			<section class="row">
				<aside class="col-sm-3"></aside>
				<main class="col-sm-6">
					<div class="form-horizontal" id="login">
						<form action = "registration.php" method="post" enctype="multipart/form-data" id="eventForm">
							 <fieldset>
							 	<legend class="login_legend">Registration</legend>
								<div class="row">
								</div>
								 <div class="form-group">
									<label class="col-sm-3 control-label login_form" for="password">Name:</label>
										<div class="col-sm-9">
									<input type="text" class="form-control" id="name" placeholder="Name" name="Name"/>
								</div>
								</div>
								 <div class="form-group">
									<label class="col-sm-3 control-label login_form" for="password">Surname:</label>
										<div class="col-sm-9">
									<input type="text" class="form-control" id="surname" placeholder="Surname" name="Surname"/>
								</div>
								</div>
								 <div class="form-group">
									<label class="col-sm-3 control-label login_form" for="Username">Username:</label>
										<div class="col-sm-9">
											<input type="text" name="Login" class="form-control" id="Username" placeholder="Login"/>
										</div>
									</div>
								<div class="form-group">
									<label class="col-sm-3 control-label login_form" for="password">Password:</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" id="password" placeholder="Password" name="Password"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label login_form" for="passwordAgain">Retry your password:</label>
										<div class="col-sm-9">
											<input type="password" name="PasswordAgain" class="form-control" placeholder="Password" id="passwordAgain">
										</div>
									</div>
								<div class="form-group">
								  	<label class="col-sm-3 control-label login_form" for="email">Email:</label>
										<div class="col-sm-9">
											<input type="text" name="Email" class="form-control" id="email" placeholder="E-mail">
										</div>
									</div>

							</fieldset>
							<div class="button">
								<button type="submit" class="btn btn-success" name = "save" id="send">Register</button>
							</div>
						
						</form>
					</div>
					<?php
					$i=0;
					if(isset($_POST["save"])){
					if($_POST['Password'] == $_POST['PasswordAgain']){	
								$sql = 'SELECT * 
							    FROM user 
							    WHERE Login = "' . $_POST['Login'] . '"';
								$query = mysqli_query($main->construct(), $sql);
								$count = mysqli_num_rows($query);
							if ($count>0){

								echo 'Sorry! This Username already exists!.';
								

								
							}
							else{

								$name =  mysqli_real_escape_string($main->construct(),$_POST["Name"]); 
								$surname =  mysqli_real_escape_string($main->construct(),$_POST["Surname"]); 
								$login = mysqli_real_escape_string($main->construct(),$_POST["Login"]); 
								$email = mysqli_real_escape_string($main->construct(),$_POST["Email"]); 
								$password = md5(mysqli_real_escape_string($main->construct(),$_POST["Password"])); 
									$query = "INSERT INTO user (Login, Password, Name, Surname, Email,Date) 
									VALUES ('$login', '$password','$name', '$surname','$email',Now())";
								$result = mysqli_query($main->construct(),$query);
								
								header("location:login.php");
							}
}
						else {
							echo "Pass1 not equal Pass2";
						}
					}

				
	
					

					?>
					
				</main>
				<aside class="col-sm-3"></aside>
			</section>
			<footer class="row">
				<div class="col-md-12"></div>
			</footer>
		</section>
	</body>
</html>