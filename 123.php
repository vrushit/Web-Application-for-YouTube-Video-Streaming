<!DOCTYPE html>
<?php
	session_start(); 
	if (isset($_SESSION['username']) and isset($_SESSION['password'])) {
		$username=$_SESSION['username'];
		$password=$_SESSION['password'];
	}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo "<div>welcome</div>
			  <div>'$username'</div>
			  <div>'$password'</div>"
	 ?>
	 <a href="logout.php">logout</a>
</body>
</html>