<?php
	include 'functions.php';

	$vol = 0;
	switch($_POST['shape']) {
		case "Sphere": switch($_POST['size']) {
			case "Small" : $vol = $smallSphereVolume;
						break;
			case "Medium" : $vol = $mediumSphereVolume;
						break;
			case "Large" :	$vol = $largeSphereVolume;
						break;

		}
		break;

		case "Cylinder": switch($_POST['size']) {
			case "Small" : $vol = $smallCylinderVolume;
						break;
			case "Medium" : $vol = $mediumCylinderVolume;
						break;
			case "Large" : $vol = $largeCylinderVolume;
						break;

		}
		break;

		case "Cube":	switch($_POST['size']) {
			case "Small" : $vol = $smallCubeVolume;
						break;
			case "Medium" : $vol = $mediumCubeVolume;
						break;
			case "Large" : $vol = $largeCubeVolume;
						break;

		}
		break;
	}

	$priceOfMetal = 0;
	switch($_POST['metal']) {
		case "Copper": $priceOfMetal = $costCopperPerCm3;	
				break;
		case "Steel": $priceOfMetal = $costSteelPerCm3;
				break;
		case "Aluminium": $priceOfMetal = $costAluminiumPerCm3;
				break;

	}
	
	$baseSubstanceCost = ((100 - $_POST['purity'])/100.0) * 0.5;

	$pureMetalCost = (($_POST['purity'])/100.0) * $priceOfMetal;

	$shapingCost = $vol * ($baseSubstanceCost + $pureMetalCost);
 
	echo round($shapingCost,2);
?>