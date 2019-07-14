<?php session_start();

$errors = array();

include("register.php");
include("login.php"); 




include("logout.php");
?>

<!-------------------------------------SCROLL-BUTTON------------------------------------------>
<button id = "scroll_btn" title = "Scroll up" onclick = "scrolltop();">Up</button>

<!----------------------------------------NAVBAR---------------------------------------------->	
<div id = "navbar">
	<div id = "logo">
		<strong>Imagine<br>Company</strong>
	</div><!--/logo-->
	<div id = "navbar_right">
		<a href="#" onclick="opensidebar();">Account</a>
	</div>
		<a href = "#contact">Contact		</a>
		<a href = "#forum">Forum			</a>
		<a href = "#services">Our services	</a>
		<a href = "#news">News				</a>
		<a href = "#aboutus">About us		</a>
		<a href = "#header">Hello			</a>
</div><!--/Navbar-->

<!------------------------------------------SIDEBAR------------------------------------------->
<div id="sidebar">
	<a href="javascript:void(0)" class="closebtn" onclick="closesidebar();">&times;</a>
	<?php if (!isset($_SESSION['username'])) { ?>
	<!--loginform-->
	<form method="POST" action = "" id = "login">
		<span style="width: 250px">Log into your account</span>
		<hr>
		<input type="text" name = "username" placeholder="Username">
		<input type="password" name = "password" placeholder="Password">
		<hr>
		<button name = "log_in"><span>Log in</span></button>
		<span style="width: 250px; font-size: 15px;padding-top: 20px;">Do not have account yet? <a href="javascript:void(0)" onclick="showreg();" class="showreg">Register</a>now!</span>
		<?php include("error.php"); ?>  
	</form>
	<!--registerform-->
	<form method="POST" action = "" id = "register">
		<span style="width: 250px">Create account</span>
		<hr>
		<input type="text" name = "username" placeholder="Set username">
		<input type="password" name = "password_1" placeholder="Set password">
		<input type="password" name = "password_2" placeholder="Verify password">
		<input type="email" name="email" placeholder="Email">
		<hr>
		<button name="sign_up"><span>Sing up</span></button>
		<span style="width: 250px; font-size: 15px;padding-top: 20px;">Have you account already? <a href="javascript:void(0)" onclick="showlog();" class="showlog">Log in</a>here!</span>
		<?php include("error.php"); ?> 
	</form>
<?php } else { ?>

	<form method="POST" action="" id="logout">
		<span>Your account</span>
		<hr>
		<span style="width: 250px"><?php echo $_SESSION['username'];?></span>
		<span style="width: 250px"><?php echo $_SESSION['email'];?></span>
		<hr>
		<button name="log_out"><span>Log Out</span></button>
	</form>



<<?php } ?>	
</div><!--/sidebar-->
<hr>
<div class = "content">
	<p><h1>Welcome on our website</h1></p>
	<p>Web development for everyone</p>
</div><!--/Content-->