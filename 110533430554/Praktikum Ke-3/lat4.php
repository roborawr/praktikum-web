<html>
<head>
	<title>Data Seleksi</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="job">
			<option value="Mahasiswa" >Mahasiswa</option>
			<option value="Abri" >Abri</option>
			<option value="PNS" >PNS</option>
			<option value="Swasta" >Swasta</option>
		</select>
		<br>
		<input type="submit" value="OK">
	</form>

	<?php 
	if (isset($_POST['job'])) {
		echo 'Hallo '. $_POST['job'];
	}
	 ?>

</body>
</html>