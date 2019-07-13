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
<?php

session_start();
$sql="select * from facultyform where ID='{$_SESSION['user']}'";
$result=$conn->query($sql);
$raw=$result->fetch_assoc();
$ID=$raw['id'];
$NAME=$raw['name'];
$EMAIL=$raw['email'];
$SUBJECT=$raw['subject']; 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faculty Page</title>
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">

    
</head>
<body>
<a href="index.php"><button type="button" class="btn btn-danger">Home</button></a>
<a href="index3.php"><button type="button" class="btn btn-danger">Data</button></a>
<a href="Login.php"><button type="button" class="btn btn-danger">Logout</button></a>
  
    <div class="mainDiv">

        <div class="div1">
          <center>
               
               <img src="logo1.jpg" width="150px" height = "120px" >
          </center>
        </div>  
    <br>
        <div class="facultyDetails" >
            <div style="float:left;"> 
            <center>
            <img src="Dhruvil.JPG" height="200" width="200">
        </center>
    </div>
    <div class="facultyContent">
        <table align="center" class="facultydetail" style="border: 2px solid white">
            <tr>
              <td class="faculty" style="padding: 20px">ID:</td>
              <td class="faculty"><?php
                echo $ID;
               ?> </td>
            </tr>
            <tr>
              <td class="faculty" style="padding: 20px">Name:</td>
              <td class="faculty"><?php
                echo $NAME;
               ?></td>
            </tr>
            <tr>
              <td class="faculty" style="padding: 20px">Email:</td>
              <td class="faculty"><?php
                echo $EMAIL;
               ?></td>
            </tr>
            <tr>
              <td class="faculty" style="padding: 20px">Subject:</td>
              <td class="faculty"><?php
                echo $SUBJECT;
               ?></td>
            </tr>
          </table>
    </div>
        </div>

        <div class="dropbtn">
            <details>
                <summary>
                        Unit.1 Nature and Roll of Language
                    </summary>
                    <details class="dropbtn">
                            <summary>1. Nature of Language</summary>
                            <div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM topic1"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>

</div>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link2 FROM topic1"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link2 = $row['link2'];

    


echo "<iframe width='350' height='300' src='$link2' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>

</div>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link3 FROM topic1"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link3 = $row['link3'];

    


echo "<iframe width='350' height='300' src='$link3' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>

</div>
                            </details>
                            <details class="dropbtn">
                          <summary>2. Language and Society</summary>
                          <div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM video where id='5'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>

</div>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link2 FROM video where id='5'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link2 = $row['link2'];

    


echo "<iframe width='350' height='300' src='$link2' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>

</div>

                          </details>
                            <p style="margin-left:20px">3. Language and Gender</p>
                            <p style="margin-left:20px">4. Language in School</p>
                            <p style="margin-left:20px">5. Language Curriculum</p>
            </details>


            

        </div>

    </div>


</body>
</html>