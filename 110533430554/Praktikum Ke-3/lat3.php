<html>
<head>
	<title>Data Radio Button</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		Jenis Kelamin:<br>
		<input type="radio" name="sex" value="Pria" checked>Pria<br>
		<input type="radio" name="sex" value="Wanita">Wanita<br>
		<input type="submit" value="OK">
	</form>

	<?php 
	if (isset($_POST['sex'])) {
		echo 'Jenis Kelamin : '. $_POST['sex'];
	}
	 ?>

</body>
</html>