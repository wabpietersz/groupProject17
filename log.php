<?php 
session_start();
	require ('dbcon.php');
if (isset($_POST['uname']) and isset($_POST['pw'])){

	$uname = $_POST['uname'];
	$pw = $_POST['pw'];
	$hpw = md5($pw);

	$query = "SELECT * FROM user WHERE userName = '$uname' and password='$hpw'";
	$res = mysqli_query($conn,$query);
	$count = mysqli_num_rows($res);

	if ($count==1){
		$_SESSION['uname'] = $uname;
	}else{
		$fmsg = "invalid Login Credentials"
	}


?>