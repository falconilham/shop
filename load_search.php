<?php
include 'db.php'; 
	$search = $_POST['search'];
	$sql = "SELECT * FROM game WHERE title LIKE '%$search%'";
	     
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 1){
		while($row = $result->fetch_assoc()){
			echo "<p>";
			echo $row ['title'];
			echo "<p>";
			echo $row ['developer'];
			echo "<img src=".$row ['picture'].">";

		}
	}elseif (mysqli_num_rows($result) === 1){
		while($row = $result->fetch_assoc()){
			header('location:product.php?id_game='.$row['id_game'].'');
	}}else{
		echo "Pencarian Tidak Ada !!!";
	}
?> 