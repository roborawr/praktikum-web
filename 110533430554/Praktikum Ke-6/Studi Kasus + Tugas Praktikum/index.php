<html>
	<head>
		<style type="text/css">
		.inner{
			margin:200px auto;
			padding: 20px;
			width: 240px;
			border: 1px solid #333;
		}</style>
	</head>
	
	<body>
		<?php 
			ini_set('display_errors', 1);
			define('_VALID', 1);
			
			//include file eksternal
			require_once('./auth.php');
			
			init_login();
			validate();
		?>
		<h3>SIMULASI HALAMAN ADMIN</h3>
		<?php 
			require_once('./index2.php');
		?>
		<p>
		<a href="?m=logout">LOGOUT</a>
		
		<p>Menu-menu admin ada di sini
	</body>
</html>