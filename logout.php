<?php 
error_reporting(0);
session_start();
session_destroy();
if (isset($_COOKIE['username']) && isset($_COOKIE['password']) &&  isset($_COOKIE['remember'])) {
	$username=$_COOKIE['username'];
	$password=$_COOKIE['password'];
	$remember=$_COOKIE['remember'];
	setcookie('username',$username,time()-10);
	setcookie('password',$password,time()-10);
}
echo "You have successfully logout<br>'$remember'<br>
		  <a href='Login.php'>login</a>";

 ?>