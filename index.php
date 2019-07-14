<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="main_style.css">
	<meta charset="utf-8">
	<title>Imagine Company</title>
</head>
<body>
<div id="divbody">	
	<div id = "header">	

		<?php require_once("includes\header\index.php"); ?>

	</div><!--/header-->
	<div id = "article">
		<div class = "content">		
<!-------------------------------ABOUT-US------------------------------>
			<div id = "aboutus">

				<?php require_once("includes\\aboutus\\index.php"); ?>

			</div><!--/aboutus -->
<!--------------------------------NEWS--------------------------------->
			<div id = "news">
				
				<?php require_once("includes\\news\\index.php"); ?>
				
			</div><!--/news -->
<!-----------------------------OUR-SERVICES---------------------------->
			<div id = "services">
				
				<?php require_once("includes\\services\\index.php"); ?>

			</div><!--/news -->
<!--------------------------------FORUM-------------------------------->
			<div id = "forum">
				
				<?php require_once("includes\\forum\\index.php"); ?>
				
			</div><!--/forum -->
<!-------------------------------CONTACT------------------------------->
			<div id = "contact">
				
				<?php require_once("includes\\contact\\index.php"); ?>

			</div><!--/contact -->
		</div><!--/Content-->
	</div><!--/article-->
	<div id = "footer">
		
		<?php require_once("includes\\footer\\index.php"); ?>

	</div><!--/footer-->
</div><!--/divbody-->
<script src = "main_jsc.js"></script>
</body>
</html>