<!DOCTYPE html> 
<html> 
	<head> 
		<meta charset="UTF-8">
		<title> Orders </title> 
	</head> 
	<body> 
		<div class = "orders">
		<table>  
			<h4>Orders</h4>
			<tr>
				<th>Name</th>
				<th>Address</th> 
				<th>Item</th>
			</tr>
				<?php
					include 'connection.php';

					$query = "SELECT * FROM customers";
					$result = $conn -> query($query);	

					if($result -> num_rows > 0){
						while($row = $result -> fetch_assoc()){
					
						echo "<tr>".
							"<td align = 'center'>".$row["Name"]."</td>".
							"<td align = 'center'>".$row["Address"]."</td>".
							"<td align = 'center'>".$row["item"]."</td>".
							"<tr>";	
						}
					}

				$conn -> close();
				?>
			</table>
		</div>
	</body> 
</html>
