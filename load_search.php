<?php
include 'db.php'; 
	$search = $_POST['search'];
	$sql = "SELECT * FROM game WHERE title LIKE '%$search%'";
	     
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0){
		while($row = $result->fetch_assoc()){
			echo "<p>";
			echo $row ['title'];
			echo "<p>";
			echo $row ['developer'];
			echo "<img src=".$row ['picture'].">";

		}
	}else {
		echo "Pencarian Tidak Ada !";
	}
?> 