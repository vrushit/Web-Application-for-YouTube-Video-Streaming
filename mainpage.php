<?php require'connect1.php' ?>
<?php  

	$sql='select * from leagalinfo where 1';
	if($result=$conn->query($sql))
	{
		while ($raw = $result->fetch_assoc()) {
			if ($_POST['username']==$raw['username']) {
				if($_POST['Password']==$raw['password'])
				{
					$username=$_POST['username'];
					$password=$_POST['Password'];
					$remember=$_POST['remember'];
					if (isset($_POST['remember'])) {
						setcookie('username',$username,time()+84600*360);
						setcookie('password',$password,time()+84600*360);
					}
					session_start();
					$_SESSION['username']=$username;
					$_SESSION['password']=$password;
					$_SESSION['remember']=$remember;
					header("location:english.php");
				}
				else
				{
					echo "Your password is incorrect.";break;
				}				
			}
			else  
				{
					echo "Your username is incorrect.";				
				}
		}
	}

?>