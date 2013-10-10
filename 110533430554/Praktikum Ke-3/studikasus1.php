<html>
<head>
	<title>Studi Kasus: Preselecting pada Seleksi</title>
</head>
<body>
	<h2>Sistem Informasi Nilai Kuliah</h2>
	<strong>Matakuliah:</strong><br>
	<em>Silakan pilih matakuliah untuk menampilkan nilai</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="matkul">
			<option value="web" 
			<?php if (isset($_POST['matkul']) && $_POST['matkul']=='web') {
				echo "selected";
			} ?>
			>Praktikum Pemrograman Web</option>
			<option value="prakmulmed" <?php if (isset($_POST['matkul'])&&$_POST['matkul']=='prakmulmed') {
				echo "selected";
			} ?>>Praktikum Multimedia</option>
			<option value="rpl" 
			<?php if (isset($_POST['matkul'])&&$_POST['matkul']=='rpl') {
				echo "selected";
			} ?>
			>Rekayasa Perangkat Lunak</option>
			<option value="adsi" 
			<?php if (isset($_POST['matkul'])&&$_POST['matkul']=='adsi') {
				echo "selected";
			} ?>
			>Analisis dan Desain Sistem Informasi</option>
			<option value="mulmed" 
			<?php if (isset($_POST['matkul'])&&$_POST['matkul']=='mulmed') {
				echo "selected";
			} ?>
			>Multimedia</option>
		</select>
		<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['matkul'])) {
		switch ($_POST['matkul']) {
			case 'web':
				echo "<div id='nilai'>Nilai Praktikum Pemrograman Web: A</div>";
				break;

			case 'prakmulmed':
				echo "<div id='nilai'>Nilai Praktikum Multimedia: A</div>";
				break;

			case 'rpl':
				echo "<div id='nilai'>Nilai Rekayasa Perangkat Lunak: A-</div>";
				break;

			case 'adsi':
				echo "<div id='nilai'>Nilai Analisis dan Desain Sistem Informasi: B+</div>";
				break;

			case 'mulmed':
				echo "<div id='nilai'>Nilai Multimedia: A-</div>";
				break;	
			default:
				# code...
				break;
		}
	}
	 ?>

</body>
</html>