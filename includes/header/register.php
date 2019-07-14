<?php include("db_users_con.php");

if(isset($_POST["sign_up"])){

	$password_1 = "";
	$password_2 = "";
	$username 	= "";
	$email 		= "";


	$password_1 = mysqli_real_escape_string($db_users_con, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db_users_con, $_POST['password_2']);
	$username 	= mysqli_real_escape_string($db_users_con, $_POST['username']);
    $email 		= mysqli_real_escape_string($db_users_con, $_POST['email']);
    
      
    if(empty($username)){
    	array_push($errors, "Username is required");
	}
    if(empty($email)){
    	array_push($errors, "Email is required");
	}
    if(empty($password_1)){
       	array_push($errors, "Password is required");
    }
    else if(strlen($password_1) < 8){
        array_push($errors, "Password is to short");   
    }
    else if($password_1 != $password_2){
        array_push($errors, "The two passwords do not match");
    }
      

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db_users_con, $user_check_query);
    $user = mysqli_fetch_assoc($result);
        
    if ($user) {
        if ($user['username'] === $username) {
        	array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
          	array_push($errors, "email already exists");
        }
    }

    if(count($errors) == 0){
        $password = md5($password_1);

        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($db_users_con, $query);
        
        $_SESSION['username'] 	= $username;
        $_SESSION['email'] 		= $email; 
      }
?>
	<style>
		#sidebar{ width: 250px;}
		#divbody{ margin-right: 250px;}
		#register{ display: block; }
		#login {display: none;}
	</style>
<?php } ?>