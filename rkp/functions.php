<?php

	// calculate volume of sphere
	function volumeOfSphere($rad) {
		$vol = (4*M_PI*$rad*$rad*$rad)/3.0;
		$formattedNum = round($vol, 2);
		return $formattedNum;
	}

	// calculate volume of cylinder
	function volumeOfCylinder($rad, $height) {
		$vol = M_PI*$rad*$rad*$height;
		$formattedNum = round($vol, 2);
		return $formattedNum;
	}

	// calculate volume of cube
	function volumeOfCube($side) {
		$vol = $side*$side*$side;
		$formattedNum = round($vol, 2);
		return $formattedNum;
	}

	$smallSphereVolume = volumeOfSphere(5);
	$mediumSphereVolume = volumeOfSphere(10);
	$largeSphereVolume = volumeOfSphere(15);

	$smallCylinderVolume = volumeOfCylinder(5, 10);
	$mediumCylinderVolume = volumeOfCylinder(7, 15);
	$largeCylinderVolume = volumeOfCylinder(10, 25);

	$smallCubeVolume = volumeOfCube(5);
	$mediumCubeVolume = volumeOfCube(10);
	$largeCubeVolume = volumeOfCube(15);

	// calculate tsa of sphere
	function totalSurfaceAreaOfSphere($rad) {
		$tsa = (4*M_PI*$rad*$rad);
		$formattedNum = round($tsa, 2);
		return $formattedNum;
	}

	// calculate tsa of cylinder
	function totalSurfaceAreaOfCylinder($rad, $height) {
		$tsa = 2*M_PI*$rad*($rad+$height);
		$formattedNum = round($tsa, 2);
		return $formattedNum;
	}

	// calculate tsa of cube
	function totalSurfaceAreaOfCube($side) {
		$tsa = 6*$side*$side;
		$formattedNum = round($tsa, 2);
		return $formattedNum;
	}

	$smallSphereTotalSurfaceArea = totalSurfaceAreaOfSphere(5);
	$mediumSphereTotalSurfaceArea = totalSurfaceAreaOfSphere(10);
	$largeSphereTotalSurfaceArea = totalSurfaceAreaOfSphere(15);

	$smallCylinderTotalSurfaceArea = totalSurfaceAreaOfCylinder(5, 10);
	$mediumCylinderTotalSurfaceArea = totalSurfaceAreaOfCylinder(7, 15);
	$largeCylinderTotalSurfaceArea = totalSurfaceAreaOfCylinder(10, 25);

	$smallCubeTotalSurfaceArea = totalSurfaceAreaOfCube(5);
	$mediumCubeTotalSurfaceArea = totalSurfaceAreaOfCube(10);
	$largeCubeTotalSurfaceArea = totalSurfaceAreaOfCube(15);	

	$densityCopperGmPerCm3 = 8.92;
	$densitySteelGmPerCm3 = 7.75;
	$densityAluminiumGmPerCm3 = 2.7;
	$densityGoldGmPerCm3 = 19.3;
	$densitySilverGmPerCm3 = 10.49;
	$densityBronzeGmPerCm3 = 8.90;

	$costCopperPerGram = 0.33;
	$costSteelPerGram = 0.01;
	$costAluminiumPerGram = 0.11;
	$costGoldPerGram = 2387.04;
	$costSilverPerGram = 32.02;
	$costBronzePerGram =  0.19;

	// calculate the cost per Cm^3 using density and cost per gm of metal
	function calculateCostPerCm3($densityGmPerCm3, $costPerGm) {
		return round($densityGmPerCm3*$costPerGm, 2);
	}

	$costCopperPerCm3 = calculateCostPerCm3($densityCopperGmPerCm3, $costCopperPerGram);
	$costSteelPerCm3 = calculateCostPerCm3($densitySteelGmPerCm3, $costSteelPerGram);
	$costAluminiumPerCm3 = calculateCostPerCm3($densityAluminiumGmPerCm3, $costAluminiumPerGram);
	$costGoldPerCm3 = calculateCostPerCm3($densityGoldGmPerCm3, $costGoldPerGram);
	$costSilverPerCm3 = calculateCostPerCm3($densitySilverGmPerCm3, $costSilverPerGram);
	$costBronzePerCm3 = calculateCostPerCm3($densityBronzeGmPerCm3, $costBronzePerGram);
?>