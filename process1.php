<?php 

require_once('connection.php');
session_start();
?>
<?php
if(isset($_POST['Login'])){
	if(empty($_POST['email']) || empty($_POST['password']))
	{
            header("location:bank.php?Empty=Enter all the fields");
	}
	else
	{
	$query="select * from user where email='".$_POST['email']."' and password='".$_POST['password']."'";
	$result=mysqli_query($con,$query);
	if(mysqli_fetch_assoc($result))
	{
		$_SESSION['Users']=$_POST['email'];
		header("location:index.php");
	}
	else{
		header("location:bank.php?Invalid=Please enter valid email and password");
	}
	}

}
else{
	echo 'not working ';
}
?>