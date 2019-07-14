<?php 
	if(isset($_POST["log_out"])){
		session_unset();
		session_destroy();
	}
?>