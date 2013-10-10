<html>
<head>
	<title>Studi Kasus 2: Prefilling pada Checkbox</title>
</head>
<body>
	<h1>Visit Malang 2013</h1>
	<div id='info'>Sistem Informasi objek wisata, situs sejarah, dan oleh-oleh Kota Malang</div>
	<h3>Iki Lho Malang Rek!!!</h3>
	<em>Pilih objek wisata yang akan dituju:</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="checkbox" name="wisata[]" value="bns" 
		<?php if (isset($_POST['wisata'])) {

			foreach ($_POST['wisata'] as $key => $value) {
				if ($value=='bns') {
					echo "checked";
				}
		}
			
		} ?>
		>BNS(Batu Night Spectaculer)<br>
		<input type="checkbox" name="wisata[]" value="cobanrondo" 
		<?php if (isset($_POST['wisata'])) {

			foreach ($_POST['wisata'] as $key => $value) {
				if ($value=='cobanrondo') {
					echo "checked";
				}
		}
			
		} ?>
		>Air Terjun Coban Rondo<br>
		<input type="checkbox" name="wisata[]" value="candi"
		<?php if (isset($_POST['wisata'])) {

			foreach ($_POST['wisata'] as $key => $value) {
				if ($value=='candi') {
					echo "checked";
				}
		}
			
		} ?>
		>Candi Singosari<br>
		<input type="checkbox" name="wisata[]" value="museum"
		<?php if (isset($_POST['wisata'])) {

			foreach ($_POST['wisata'] as $key => $value) {
				if ($value=='museum') {
					echo "checked";
				}
		}
			
		} ?>
		>Museum Brawijaya<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['wisata'])) {
		echo "<div id='pilihan'>Anda memilih tempat-tempat wisata berikut:</div><br/>";
		echo "<ul>";
		foreach ($_POST['wisata'] as $key => $value) {
			echo "
			<li>".$value."</li>
			";
		}

		echo "</ul>";
	}
	 ?>

</body>
</html>