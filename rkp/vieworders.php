<?php
	include 'connection_open.php';

	$query = "SELECT * FROM orders";

	$result = mysqli_query($dbc, $query) or die('Error connecting to database');

	if(mysqli_num_rows($result) > 0) {
		echo "<table class='table table-striped table-responsive' id='achievement_hometable'>";
	  	echo "<thead><tr>";
	  	echo "<th>Order No</th>";
	  	echo "<th>Username&nbsp</th>";
	  	echo "<th>Description</th>";
	  	echo "<th>Shaping Cost</th>";
	  	echo "<th>Plating Cost</th>";
	  	echo "<th>Tax</th>";
	  	echo "<th>Total Cost</th>";
	  	echo "<th>Date & Time</th>";
	  	echo "</tr></thead>";
	  	echo "<tbody>";
	  	while($suggestion1 = mysqli_fetch_array($result)) {
		    echo "<tr>".
		        "<td>". $suggestion1['OrderNo']. "</td>".
		        "<td>".$suggestion1['Username']."</td>".
		        "<td>".$suggestion1['Description']."</td>".
		        "<td>".$suggestion1['ShapingCost']."</td>".
		      	"<td>".$suggestion1['PlatingCost']."</td>".
		        "<td>".$suggestion1['Tax']."</td>".
		        "<td>".$suggestion1['TotalCost']."</td>".
		        "<td>".$suggestion1['DateTime']."</td>".
		      "</tr>";
		 }
	  	echo "</tbody></table>";
	}
	else {
		echo "<center></br><p>No luck with orders!</p></br></center>";
	}
	include 'connection_close.php';
?>
