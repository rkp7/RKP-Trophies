<?php
	$temp_total = $_POST['ShapingCost'] + $_POST['PlatingCost'];

	$tax = round($temp_total*12.5/100, 2);

	$total = $temp_total + $tax;
	
	echo round($total,2);

?>