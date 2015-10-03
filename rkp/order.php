<?php
	$phptime = mktime();
	$mysqltime = date ("Y-m-d H:i:s", $phptime);

	include 'connection_open.php';

	$description = $_POST['description'];

	$username = $_POST['username'];
	$description = mysqli_escape_string($dbc, $description);
	//$username = mysqli_escape_string($dbc, $username);

	$ShapingCost = $_POST['ShapingCost'];
	$PlatingCost = $_POST['PlatingCost'];
	$TotalCost = $_POST['TotalCost'];
	$Tax = round($TotalCost - $ShapingCost - $PlatingCost,2);

	$query = "INSERT INTO orders (Username, Description, ShapingCost, PlatingCost, Tax, TotalCost, DateTime)
			VALUES ('$username', '$description', '$ShapingCost', '$PlatingCost', '$Tax', '$TotalCost', '$mysqltime')";

	$result = mysqli_query($dbc, $query) or die('Error querying database');
	include 'connection_close.php';
?>