<html>
<head>
	<title>Prefilling Data Radio Button</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		Jenis Kelamin:<br>
		<input type="radio" name="sex" value="Pria" <?php 
			if (isset($_POST['sex']) && $_POST['sex']=='Pria') {
				echo "checked=checked";
			}
		 ?>>Pria<br>
		<input type="radio" name="sex" value="Wanita" <?php 
			if (isset($_POST['sex']) && $_POST['sex']=='Wanita') {
				echo "checked=checked";
			}
		 ?>>Wanita<br>
		<input type="submit" value="OK">
	</form>

	<?php 
	if (isset($_POST['sex'])) {
		echo 'Jenis Kelamin : '. $_POST['sex'];
	}
	 ?>

</body>
</html>