<?php
include("./assets/php/config.php");
include("./assets/php/login_check.php");
session_start();
if(isset($_SESSION['login']))
{ header("location:index.php"); }

$main = new DB_class();
$main->construct();
$main->check();


?>


<!DOCTYPE html>
<html lang = "en">
	<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href = "assets/css/bootstrap.min.css">
	<link rel="styleshhet" href = "assets/css/css.css">
	<title>Login</title>
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
					<form method="post" id="eventForm">
						 <fieldset>
						 	<legend class="login_legend">Login</legend>
							<div class="row">
							</div>
							 <div class="form-group">
			                	<label class="col-sm-3 control-label login_form" for="login">Login:</label>
			             		<div class="col-sm-9">
			               			<input type="text" name="login" class="form-control" id="login" placeholder="Login"/>
			              		</div>
	            			</div>
							<div class="form-group">
								<label class="col-sm-3 control-label login_form" for="password">Password:</label>
								<div class="col-sm-9">
									<input type="password" class="form-control" id="password" placeholder="Password" name="password"/>
								</div>
							</div>
						</fieldset>
						<div class="button">
							<button type="submit" name="loginbutton"class="btn btn-success" id="send">Login</button>
						</div>
						<div>
							<p>Don't have an account? <a href="./registration.php">Then register now!</a>
						</div>
					</form>
					
					<?php
					if(isset($_POST["loginbutton"])){
							login_check();
					}
					?>
				</div>
			</main>
			<aside class="col-sm-3"></aside>
		</section>
		<footer class="row">
			<div class="col-md-12"></div>
		</footer>
	</section>
</body>
</html>