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
$sql="select * from facultydata where Subject = 'English' ";
$result=$conn->query($sql);
$raw=$result->fetch_assoc();
$ID=$raw['id'];
$NAME=$raw['Name'];
$EMAIL=$raw['Email'];
$SUBJECT=$raw['Subject']; 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<a href="index.php"><button type="button" class="btn btn-danger">Home</button></a>
  
    <div class="mainDiv">

        <div class="div1">
          <center>
               
               <img src="logo1.jpg" width="150px" height = "120px" >
          </center>
        </div>  
    <br>
     <?php 
$mysqli = new mysqli("127.0.0.1:3307","root","","facultydetails") or die (mysqli_error($mysqli));

$result =  $mysqli->query("SELECT * FROM facultyData where subject = 'English';") or die ($mysqli->error);

//pre_r($result->fetch_assoc());
$row = $result->fetch_assoc()
?>
        <div class="facultyDetails" >
            <div style="float:left;"> 
            <center>
            <img src="Image.png" height="200" width="200">
        </center>
    </div>
    <div class="facultyContent">
        <table align="center" class="facultydetail" style="border: 2px solid white">
            <tr>
              <td class="faculty" style="padding: 20px">ID:</td>
              <td class="faculty"><?php
                echo $row['id'];
               ?> </td>
            </tr>
            <tr>
              <td class="faculty" style="padding: 20px">Name:</td>
              <td class="faculty"><?php
                echo $row['Name'];
               ?></td>
            </tr>
            <tr>
              <td class="faculty" style="padding: 20px">Email:</td>
              <td class="faculty"><?php
                echo $row['Email'];
               ?></td>
            </tr>
            <tr>
              <td class="faculty" style="padding: 20px">Subject:</td>
              <td class="faculty"><?php
                echo $row['Subject'];
               ?></td>
            </tr>
          </table>
    </div>
        </div>
<br>
        <div class="dropbtn">
            <details>
                <summary>
                        Unit.1 Nature and Role of Language 

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

$sql = "SELECT link1 FROM English where id='17'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
 
</details>
<details class="dropbtn">
<summary>2. Language and Society </summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='2'"; 
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

$sql = "SELECT link2 FROM English where id='2'"; 
$result = $mysql->query($sql);
$link2 = 0;


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

$sql = "SELECT link3 FROM English where id='2'"; 
$result = $mysql->query($sql);
$link3 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link3 = $row['link3'];

    


echo "<iframe width='350' height='300' src='$link3' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>
<details class="dropbtn">
<summary>3. Language and Gender </summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='3'"; 
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

$sql = "SELECT link2 FROM English where id='3'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link2 = $row['link2'];

    


echo "<iframe width='350' height='300' src='$link2' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>
<details class="dropbtn">
<summary>4. Language in School: Medium of  understanding: Multilingual and multicultural classroom</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='4'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>
<details class="dropbtn">
<summary>5.LANGUAGE CURRICULUM</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='5'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>
</details>
<details>
 <summary>
                        Unit.2 Language Teaching - An Overview 
                    </summary>
                    <details class="dropbtn">
                            <summary>1. Different approaches/theories to language learning & teaching 
</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='6'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>

<details class="dropbtn">
<summary>2.Philosophical, social and psychological bases of approaches  to Language</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='7'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>

<details class="dropbtn">
<summary>3. Teaching of English as a Second Language in India</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='8'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>

<details class="dropbtn">
<summary>4.A critical analysis of the evaluation of language teaching methodologies</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='9'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>

<details class="dropbtn">
<summary>5.Alternative Approaches to Language Teaching</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='10'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>

</details>
<details>
<summary>
                        Unit.3 Developing Language Skills  

                    </summary>
                    <details class="dropbtn">
                            <summary>1.Developing Language Skills: Grammar in context</summary>
                            <div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='11'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>

<details class="dropbtn">
<summary>2.Developing Language Skills: vocabulary in context </summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='12'"; 
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

$sql = "SELECT link2 FROM English where id='12'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link2 = $row['link2'];

    


echo "<iframe width='350' height='300' src='$link2' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>

<details class="dropbtn">
<summary>3.Language skills: Listening</summary>
 <div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='13'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>

<details class="dropbtn">
<summary>4.Language skills: Speaking</summary>
 <div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='14'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link1 = $row['link1'];

    


echo "<iframe width='350' height='300' src='$link1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>

<details class="dropbtn">
<summary>5.Language skills: reading and writing</summary>
 <div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM English where id='15'"; 
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

$sql = "SELECT link2 FROM English where id='15'"; 
$result = $mysql->query($sql);
$link1 = 0;


$row = $result->fetch_assoc();

        //echo "Link1: " . $row["link1"]. " " . $row["l"]. "<br>";  
        $link2 = $row['link2'];

    


echo "<iframe width='350' height='300' src='$link2' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   ?>
 </div>
</details>

</details>
                           
            

        </div>

    </div>


</body>
</html>