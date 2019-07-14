<?php if(count($errors) > 0) { ?>
	<hr style="border: 1px solid #4CAF50;">
	<div class = "error" >
		<?php foreach ($errors as $error){ ?>
			<span style="width: 250px"><?php echo $error; ?></span> 
		<?php } ?>
	</div>
<?php } ?>
