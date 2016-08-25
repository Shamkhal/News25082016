<!DOCTYPE html>
<html>
<head>
<style>
table, tr, td{
	border: 1px solid black;
	padding: 10px;
}
</style>
	<title></title>
</head>
<body>


<?php

include "../db.php";



	if ($db_con) {

		$sql = "SELECT * FROM news_table";
		$query = mysqli_query($db_con, $sql); 
		
	?>
	<h1>NEWS</h1>
	<a href="create.php?id=<?php echo $row["id"];?>">CREATE</a>
	<table>
		<tr>
			<td>Id</td>
			<td>Image</td>
			<td>Title</td>
			<td>Text</td>
		</tr>

	<?php
		while ($row=mysqli_fetch_assoc($query)) {
				?>
				<tr> 
				
				<?php
			foreach ($row as $key => $value) {
					?>
							<td><?php echo $value;?></td>
				<?php } ?>
							<td><a href="delete.php?id=<?php echo $row["id"];?>">DELETE</a></td>
							<td><a href="update.php?id=<?php echo $row["id"];?>">UPDATE</a></td>
							<td><a href="read.php?id=<?php echo $row["id"];?>">READ</a></td>
			</tr>
		<?php
		}
		?> 	
		</table>
		<?php
	
	}else{
		echo "error";
	}


?>

</body>
</html>
