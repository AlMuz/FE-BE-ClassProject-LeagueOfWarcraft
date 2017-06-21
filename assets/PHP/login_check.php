<?php
	function login_check(){
	$main = new DB_class();
		if (empty($_POST['login']))  
		{
			$info_log = 'Write your login, please! ';
			echo $info_log. "</br>" ;
		}
		if (empty($_POST['password']))  
		{
			$info_pass = 'Write your password, please!';
			echo $info_pass ;
		}

		else{
			$login = mysqli_real_escape_string($main->construct(),$_POST["login"]);
			$password = md5(mysqli_real_escape_string($main->construct(),$_POST["password"]));
			$i = 0;
			$query = "SELECT iduser, Login, Password, Root FROM user WHERE Login = '$login' AND Password = '$password'";

			$result = mysqli_query($main->construct(),$query);

			while($row = mysqli_fetch_array($result)){
				$Root = $row['Root'];
				$i++;
			}
			if($i == 0) {
				echo "Incorrect login or password!";
			}
			if($i == 1) { 
				header("location:index.php");
				session_start();
				$_SESSION['login'] = $login;
				$_SESSION['Root']= $Root ;
			}
		}
	}
?>