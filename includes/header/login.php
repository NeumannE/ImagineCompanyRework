<?php include("db_users_con.php");


if(isset($_POST["log_in"])){

	$username = "";
	$password = "";

	

	$username = mysqli_real_escape_string($db_users_con, $_POST["username"]);
	$password = mysqli_real_escape_string($db_users_con, $_POST["password"]);

	if(empty($username)){
		array_push($errors, "Username is required!");
	}
	if(empty($password)){
		array_push($errors, "Password is required!");
	}



	if(count($errors) == 0){
		$password = md5($password);

		$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($db_users_con, $query);

		if(mysqli_num_rows($result) == 1){
			$row = mysqli_fetch_assoc($result);

			$_SESSION['username']	= $row['username'];
			$_SESSION['email']	= $row['email'];
		} else {
			array_push($errors, "Your username or pasword is wrong");
		}
	}
?>
	<style>
		#sidebar{ width: 250px;}
		#divbody{ margin-right: 250px;}
		#register{ display: none; }
		#login {display: block;}
	</style>
<?php } ?>
