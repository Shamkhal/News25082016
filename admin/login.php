<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			background-color:#EDEFF0;
			font-family:sans-serif;
		}
		.main{
			background-color:white;
			margin:0 auto;
			width:300px;
			height:420px;
			text-align:center;
			border-radius:5px;
			position:relative;
		}
		h4{
			color:	#555555;
			margin:0;
			font-weight:normal;
		}
		p{
			color:#999999;
		}
		input{
			padding:10px;
			width:80%;
			margin:10px;
		}
		.btn{
			padding:15px 0;
			border-radius:3px;
			background-color: #76AB3C;
			color:white;
			width:45%;
			border:none;
		}
		h6{
			width:100%;
			text-align:center;
			border-radius:5px;
			background:#FAFAFA;
			padding:10px 0;
			margin:0;
			font-weight:normal;
			color:#555555;
			position:absolute;
			bottom:0;
		}
		.msg{
			margin: 5px auto;
			width:280px;
			background: #ffb2b2;
			padding:10px 10px;
		}
	</style>
</head>
<body>
	
	<div class="main">
		<h4>Admin Login</h4>
		<p>Sign in to your account</p>

		<form method="post" action="check.php">
			<input placeholder="Username" type="username" name="username">
			<input placeholder="Password" type="password" name="password">
			<input type="submit" name="submit-btn" class="btn" value="Sign In" >
		</form>

		<h6>Code Academy 2016. All rights reserved</h6>
	</div>

	<?php 
		session_start();
		if( isset($_SESSION['error']) ) {
	?>
		

		<div class="msg"><?= $_SESSION['error']; ?></div>
		
	<?php
	unset($_SESSION['error']); } ?>

	
	 


</body>
</html>