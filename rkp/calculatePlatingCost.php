<?php
	include 'functions.php';

	$tsa = 0;
	switch($_POST['shape']) {
		case "Sphere": switch($_POST['size']) {
			case "Small" : $tsa = $smallSphereTotalSurfaceArea;
						break;
			case "Medium" : $tsa = $mediumSphereTotalSurfaceArea;
						break;
			case "Large" :	$tsa = $largeSphereTotalSurfaceArea;
						break;

		}
		break;

		case "Cylinder": switch($_POST['size']) {
			case "Small" : $tsa = $smallCylinderTotalSurfaceArea;
						break;
			case "Medium" : $tsa = $mediumCylinderTotalSurfaceArea;
						break;
			case "Large" : $tsa = $largeCylinderTotalSurfaceArea;
						break;

		}
		break;

		case "Cube":	switch($_POST['size']) {
			case "Small" : $tsa = $smallCubeTotalSurfaceArea;
						break;
			case "Medium" : $tsa = $mediumCubeTotalSurfaceArea;
						break;
			case "Large" : $tsa = $largeCubeTotalSurfaceArea;
						break;

		}
		break;
	}

	$priceOfCoat = 0;
	switch($_POST['coat']) {
		case "Gold": $priceOfCoat = $costGoldPerCm3;	
				break;
		case "Silver": $priceOfCoat = $costSilverPerCm3;
				break;
		case "Bronze": $priceOfCoat = $costBronzePerCm3;
				break;

	}

	$platingCost = $priceOfCoat * $tsa * $_POST['thickness'] * 0.1;

	echo round($platingCost,2);
?>