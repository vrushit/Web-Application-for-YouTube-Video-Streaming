<!DOCTYPE html>
<?php
include"connect3.php";
include"connect.php";
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
    <title>Student Page</title>
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
<br>
        <div class="dropbtn">
            <details>
                <summary>
                        Unit.1 Social sciences as an Integrating Area of Study: Context and Concerns :

                    </summary>
                    <details class="dropbtn">
                            <summary>1. Distinguishing between natural and social sciences: major social sciences disciplines in schools.</summary>
</details>
<details class="dropbtn">
<summary>2. What is 'social' about various social sciences</summary>
</details>
<details class="dropbtn">
<summary>3. Uniqueness of disciplines vis-a-vis inter disciplinarily </summary>
</details>
<details class="dropbtn">
<summary>4. important social and economic issues and concerns </summary>
</details>
<details class="dropbtn">
<summary>5. Multiple perspectives/plurality of approaches for constructing explanations and arguments. </summary>
</details>

 <summary>
                        Unit.2 Teaching-Learning Resources in Social Sciences

                    </summary>
                    <details class="dropbtn">
                            <summary>1. People as resource: The significance of oral data</summary>
</details>

<details class="dropbtn">
<summary>2. Types of primary and secondary Sources: data from field, textual materials, journals, magazines, newspapers, etc. </summary>
</details>

<details class="dropbtn">
<summary>3. Using the library for secondary sources and reference material, such as dictionaries and encyclopedias</summary>
</details>

<details class="dropbtn">
<summary>4. Various teaching aids: Using atlas as a resource for social sciences; maps, globe, charts, models, graphs, visuals. </summary>
</details>

<summary>
                        Unit.3 Teaching-Learning of Economics: State, Market, and Development 

                    </summary>
                    <details class="dropbtn">
                            <summary>1. Meaning, Nature and Scope of Economics: Current Trends </summary>
</details>

<details class="dropbtn">
<summary>2. Key Concepts in Economics </summary>
</details>

<details class="dropbtn">
<summary>3. Classification of Economic System</summary>
</details>

<details class="dropbtn">
<summary>4. Developmental Issues in Economics </summary>
</details>

<details class="dropbtn">
<summary>5. Teaching-Learning Methods in Economics</summary>
</details>


                            <div class="youtube">
   <?php
   $mysql = new mysqli("localhost","root","","VideoLink");

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
   $mysql = new mysqli("localhost","root","","VideoLink");

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
   $mysql = new mysqli("localhost","root","","VideoLink");

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
   $mysql = new mysqli("localhost","root","","VideoLink");

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
   $mysql = new mysqli("localhost","root","","VideoLink");

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