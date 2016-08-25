<!DOCTYPE html>

<?php

include "../db.php";



	if ($db_con) {

		$sql = "SELECT * FROM news_table";
		$query = mysqli_query($db_con, $sql); 


		
		
	?>


<html>
<head>
	<style>
		/*img{
			height: 400px;
			width: 200px;

		}*/
	</style>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

 	<section id="news">
 	<div class="container-fluid">
 		<div class="container">

 			<div class="col-md-4">
	 			<div class="news">
	 				<img src="uploads/1.jpg" class="img-responsive">
	 				<h4>İndoneziyada itmiş tanker tapıldı</h4>
	 			</div>				
 			</div>
 			<div class="col-md-4">
	 			<div class="news">
	 				<img src="uploads/1.jpg" class="img-responsive">
	 				<h4>İndoneziyada itmiş tanker tapıldı</h4>
	 			</div>				
 			</div>
 			<div class="col-md-4">
	 			<div class="news">
	 				<img src="uploads/1.jpg" class="img-responsive">
	 				<h4>İndoneziyada itmiş tanker tapıldı</h4>
	 			</div>				
 			</div>
 		</div>
 	</div>
 		
 	</section>
</body>
</html>