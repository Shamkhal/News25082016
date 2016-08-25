<?php
session_start();
$username= $_POST["username"];
$password= $_POST["password"];
$submit = $_POST["submit-btn"];
$_SESSION['login']=false;
if($submit){
	if(!empty($username)&&!empty($password)){
		if($username=="admin"&&$password=="admin"){
			header('Location:create.php');
			$_SESSION['login']=true;
		}
		else if($username=="admin"&& $password!="admin")
		{
			$_SESSION['error']="Shifre sehvdi";
			header('Location:login.php');
		}
		else{
			$_SESSION['error']="Bele admin movcud deyil";
			header('Location:login.php');
		}
	}
	else{
	$_SESSION['error']="Username ve shifrenizi daxil edin";
	header('Location: login.php');
	}
}
else{
	header('Location:login.php');
}
?>