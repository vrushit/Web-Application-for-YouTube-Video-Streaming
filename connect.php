<?php
$servername="127.0.0.1:3307";
$username="root";
$password="";
$dbname="facultydetails";

$conn=new mysqli($servername,$username,$password,$dbname);

if("$conn->connect_error")
{
	die("Connection failed".$conn->connect_error);
}

?>
 <?php
	$servername = "127.0.0.1:3307";	
	$username = "root";
	$password = "";
	$dbname = "logininfo";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
?>
<?php
$servername="127.0.0.1:3307";
$username="root";
$password="";
$dbname="facultydetails";

$conn=new mysqli($servername,$username,$password,$dbname);

if("$conn->connect_error")
{
	die("Connection failed".$conn->connect_error);
}

?>