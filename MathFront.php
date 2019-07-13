<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body style="margin-top:20px;">
<?php  require_once 'MathBack.php'; ?>

<?php

   if(isset($_SESSION['msg'])):

?>

 <div class= "alert alert-<?=$_SESSION['msg_type']?>">

   <?php
   
   echo  $_SESSION['msg'];
   unset($_SESSION['msg']);

?>
</div>
   <?php endif; ?>
<div class="container">

<?php 
$mysqli = new mysqli("127.0.0.1:3307","root","","videolink") or die (mysqli_error($mysqli));

$result =  $mysqli->query("SELECT * FROM math") or die ($mysqli->error);

//pre_r($result->fetch_assoc());

?>

<div class="row justify-content-center">
        <form action="MathBack.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
        <label>
        <br>
        <input type="text" name="set" class="form-control" value="<?php echo $set ?>" placeholder="Enter Set....">
        </div>
        <div class="form-group">
        <label>
        <br>
        <input type="url" name="link1" class="form-control" 
        value="<?php echo $link1 ?>" placeholder="Enter Link1....">
        </div>
        <div class="form-group">
        <label>
        <br>
        <input type="url" name="link2" class="form-control" 
        value="<?php echo $link2 ?>" placeholder="Enter Link2....">
        </div>
        <div class="form-group">
        <label>
        <br>
        <input type="url" name="link3" class="form-control" 
        value="<?php echo $link3 ?>" placeholder="Enter Link3....">
        </div>
        <div class="form-group">
        <?php

        if($update == true):
            ?>
                    <button type="submit" class="btn btn-info" name="update">Update</button>
   <?php
    else:
   ?>
        <button type="submit" class="btn btn-primary" name="save">Save</button>
    <?php endif; ?>
        </div>
    </form>
</div>

<div class="row justify-content-center">
    <table class="table">
    <thead>
        <tr>
            <th>Set</th>
            <th>Link1</th>
            <th>Link2</th>
            <th>Link3</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>

    <?php  

        while($row = $result->fetch_assoc()):
    
    ?>
    <tr>
        <td>
    <?php
        echo $row['sets'];
    ?>
    </td>
    <td>
    <?php
        echo $row['link1'];
    ?>
    </td>
    <td>
    <?php
        echo $row['link2'];
    ?>
    </td>
    <td>
    <?php
        echo $row['link3'];
    ?>
    </td>
    <td>
    <a href="MathFront.php?edit=<?php echo $row['id'] ?>" class="btn btn-info">Edit</a> 
    <a href="MathBack.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
    </td>
    </tr>
<?php endwhile; ?>
    </table>

</div>

<?php
?>

</div>
</body>
</html>