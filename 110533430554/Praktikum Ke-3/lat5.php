<html>
<head>
	<title>Data Checkbox</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="checkbox" name="hoby[]" value="Membaca">Membaca<br>
		<input type="checkbox" name="hoby[]" value="Olahraga">Olahraga<br>
		<input type="checkbox" name="hoby[]" value="Menyanyi">Menyanyi<br>
		<input type="submit" value="OK">
	</form>

	<?php 
	if (isset($_POST['hoby'])) {
		foreach ($_POST['hoby'] as $key => $value) {
			echo $key."=>".$value."<br/>";
		}
	}
	 ?>

</body>
</html>