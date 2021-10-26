<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Film Listings</title>
</head>
	
<body>
	<h2>Film Listings</h2>
	<?php
		$mysqli = mysqli_connect("localhost", "u24533", "Theologos364!", "dbu24533");
		if (mysqli_connect_errno($mysqli)) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli, "SELECT ID, Name, Genre, Year FROM Film_Rentals");
		
		if(!$res) {
			print("MySQL error: " . mysqli_error($mysqli));
			exit;
		}

		echo "<table border='1' cellpadding='10'>";
		echo "<tr> 
		<th>ID</th> 
		<th>Movie Name</th> 
		<th>Genre</th> 
		<th>Year</th> 
		</tr>";
		
		// loop through results of database query, displaying them in the table mysql_fetch_array
		while($row = mysqli_fetch_assoc( $res )) {
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['ID'] . '</td>';
		echo '<td>' . $row['Name'] . '</td>';
		echo '<td>' . $row['Genre'] . '</td>';
		echo '<td>' . $row['Year'] . '</td>';
		echo "</tr>";
		}
		// close table>
		echo "</table>";
             
            
	?>

</body>
</html>