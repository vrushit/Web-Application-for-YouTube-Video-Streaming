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
$sql="select * from facultydata where Subject='Maths'";
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
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">

    
</head>
<body>
<a href="index.php"><button type="button" class="btn btn-danger">Home</button></a>
<a href="MathFront.php"><button type="button" class="btn btn-danger">Data</button></a>
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
            <img src="Image.png" height="200" width="200">
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
<br>
        <div class="dropbtn">
            <details>
                <summary>
                        Unit.1 Nature and Scope of Mathematics 
                    </summary>
                    <details class="dropbtn">
                    <summary>1. Meaning and building blocks of mathematics-undefined terms</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='1'"; 
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
<summary>2. Inverse and contrapositive </summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='2'"; 
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
<summary>3. Venn diagram: </summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='13'"; 
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
<summary>4. Deductive nature of mathematics</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='4'"; 
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
<summary>5. The nature of mathematical propositions- truth values</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='5'"; 
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
                        Unit.2 Aims and Objectives of Teaching School Mathematics 
                    </summary>
                    <details class="dropbtn">
 <summary>1. Objectives for teaching mathematics</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='6'"; 
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
<summary>2. Writing learning objectives and teaching points in mathematics </summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='7'"; 
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
<summary>3. Various content areas in mathematics: Algebra</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='8'"; 
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
<summary>4. Various content areas in mathematics: Geometry</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='9'"; 
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
<summary>5. Various content areas in mathematics: Trigonometry</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='10'"; 
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
                        Unit.3 Approaches and Strategies in Teaching and Learning of Mathematical Concepts 

                    </summary>
                    <details class="dropbtn">
                    <summary>1. Nature of concepts, concept formation and concept assimilation</summary>
                    <div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='11'"; 
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
<summary>2. Developing Mathematical Concepts</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='12'"; 
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
<summary>3. Planning and implementation of strategies for teaching a mathematical concept: Inductive-deductive method</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='14'"; 
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
<summary>4. Problem posing and solving</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='15'"; 
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
<summary>5. Difference between teaching of mathematics and teaching of science</summary>
<div class="youtube">
   <?php
   $mysql = new mysqli("127.0.0.1:3307","root","","VideoLink");

   if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
} 
else{
}

$sql = "SELECT link1 FROM math where id='16'"; 
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

$sql = "SELECT link1 FROM math where id='16'"; 
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
                           

            

        </div>

    </div>


</body>
</html>