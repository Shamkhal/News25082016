<!DOCTYPE html>
<html>


<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		.main {
			margin-top: 150px;
		}
		input {
			margin-top: 15px;
		}
	</style>
</head>

<body>

	<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6 col-md-offset-3">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<input type="text" name="news_title" class="form-control" placeholder="news title">
							<input type="text" name="news_text" class="form-control" placeholder="news text">
							<input type="file" name="news_img" class="form-control">
							<input type="submit" name="submit" value="Add" class="btn btn-success">
						</div>
						
						
						
					</form>
				</div>
			</div>	
		</div>
	</div>
	</div>
</body>
</html>
<?php
include "../db.php";


// if (isset($_POST['submit-btn'])) {
// 	if (isset($_POST['submit'])) {
		

		$title =$_POST["news_title"];
		$text =$_POST["news_text"];
		$img =$_FILES["news_img"];



		$dir = "../uploads/";
		$file_name = $dir.basename($img["name"]);
		move_uploaded_file($img["tmp_name"], $file_name);

	$sql = "INSERT INTO news_table (news_img, news_header, news_text) VALUES ('$file_name', '$title', '$text')";
	$query = mysqli_query($db_con,$sql);
// 		if ($query) {
// 		 	header('Location:view.php');
// 		 } 
// 		 else {
// 		 	echo "aciymadi";
// 		 }
		  

// 	} else {
// 		echo "error";
// 	}
// 	}



	if (isset($_POST['submit'])) {
		$title =$_POST["news_title"];
		$text =$_POST["news_text"];
		$img =$_FILES["news_img"];



		$dir = "../uploads/";
		$file_name = $dir.basename($img["name"]);
		move_uploaded_file($img["tmp_name"], $file_name);

	$sql = "INSERT INTO news_table (news_img, news_header, news_text) VALUES ('$file_name', '$title', '$text')";
	$query = mysqli_query($db_con,$sql);
		
	} else {
		echo "error";
	}
	




?>