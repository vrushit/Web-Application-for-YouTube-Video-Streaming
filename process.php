<?php

session_start(); 

$link1 = ' ';
$link2 = ' ';
$link3 = ' ';
$set = ' ';
$update = false;
$id = 0;

$mysqli = new mysqli("127.0.0.1:3307","root","","videolink");


if(isset($_POST['save']))
{

    $link1 = $_POST['link1'];
    $link2 = $_POST['link2'];
    $link3 = $_POST['link3'];
    $set = $_POST['set'];

    $link1 = str_replace("watch?v=","embed/",$link1);
    $link2 = str_replace("watch?v=","embed/",$link2);
    $link3 = str_replace("watch?v=","embed/",$link3); 


    $mysqli->query("INSERT INTO video(set1,link1,link2,link3)VALUES('$set','$link1','$link2','$link3')")or die($mysqli->error);
    
    $_SESSION['msg'] = "Links Saved";
    $_SESSION['msg_type'] = "success";

    header("location: index3.php");

}
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM video WHERE id=$id") or die($mysqli->error());

    $_SESSION['msg'] = "Links Deleted";
    $_SESSION['msg_type'] = "danger";

    header("location: index3.php");
}
if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM video WHERE id = $id") or die($mysqli->error());
    
    $row = $result->fetch_array();
    $link1 = $row['link1'];
    $link2 = $row['link2'];
    $link3 = $row['link3'];
    $set = $row['set1'];
}

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $link1 = $_POST['link1'];
    $link2= $_POST['link2'];
    $link3 = $_POST['link3'];
    $set = $_POST['set'];

    $link1 = str_replace("watch?v=","embed/",$link1);
    $link2 = str_replace("watch?v=","embed/",$link2);
    $link3 = str_replace("watch?v=","embed/",$link3); 
   

    $mysqli->query("UPDATE video SET set1 = '$set', link1 = '$link1', link2 = '$link2', link3= '$link3' WHERE id = $id") or die($mysqli->error());

    $_SESSION['msg'] = "Links Updated";
    $_SESSION['msg_type'] = "warning";
    
    header("location: index3.php");

}




?>