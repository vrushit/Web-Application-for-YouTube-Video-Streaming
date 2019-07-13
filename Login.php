<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styel1.css">
</head>
<body>
    <div class="frame-container">        
        <img src="logo1.jpg" width="100px" height="100px">

        <div class="box">
        <form method="post" action="mainpage.php">

        <label for="username">
            Username
        </label>
        <br>
        <input type="text" name="username" placeholder="username..............." id="1">
        <br>
        <label for="password">
            Password
        </label>
        <br>
        <input type="password" name="Password" placeholder="password................." id="2">
        <br>
        <br>
        <p style="text-align: center;">Remember Me</p>
        <input type="checkbox" name="remember" id="3" > 
        <button class="btn btn-primary" type="submit" onmouseover="onmouse()">Login</button>
        </form>
    </div>
</div>

   <script type="text/javascript">
        function onmouse(){
            <?php
                session_start();
                $_SESSION['user']="17dit004";
            ?>
        }
    </script> 

<?php 
    if (isset($_COOKIE['username']) and isset($_COOKIE['password'])) {
        $username=$_COOKIE['username'];
        $password=$_COOKIE['password'];
        echo "<script>
                document.getElementById('1').value='$username';
                document.getElementById('2').value='$password';
            </script>";
    }


?>
</body>
</html>
