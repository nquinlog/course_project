<?php
	include_once('dblogin.php');
	
	$sql = "SELECT id, name, base, additions FROM orders_t";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {
			echo "<button id="reorder" name="$row["id"]">$row["id"]</button>";
		}
	} else {
		echo "0 results";
	}
	// query method from http://www.w3schools.com/php/php_mysql_select.asp
	$conn->close();
?>