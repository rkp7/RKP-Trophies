	<div class="col-lg-6">
			<div id="buy-price">
				<legend>Price Calculation Logic</legend>
				<?php include 'functions.php'; ?>
				<h4>Dimensions</h4>
				<table class='table table-striped table-responsive'>
					<thead>
						<tr>
							<th>Shape</th>
							<th>Small</th>
							<th>Medium</th>
							<th>Large</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Sphere</td>
							<!-- <td>radius = 5 cm</br><?php echo "Volume = ". $smallSphereVolume. " cm^3"; ?></br><?php echo "TSA = ". $smallSphereTotalSurfaceArea. " cm^2"; ?></td>
							<td>radius = 10 cm</br><?php echo "Volume = ". $mediumSphereVolume. " cm^3"; ?></br><?php echo "TSA = ". $mediumSphereTotalSurfaceArea. " cm^2"; ?></td>
							<td>radius = 15 cm</br><?php echo "Volume = ". $largeSphereVolume. " cm^3"; ?></br><?php echo "TSA = ". $largeSphereTotalSurfaceArea. " cm^2"; ?></td>
							-->
							<td>radius = 5 cm</td>
							<td>radius = 10 cm</td>
							<td>radius = 15 cm</td>
						</tr>
						<tr>
							<td>Cylinder</td>
							<!-- <td>radius = 5 cm</br> height = 10 cm</br><?php echo "Volume = ". $smallCylinderVolume. " cm^3"; ?></br><?php echo "TSA = ". $smallCylinderTotalSurfaceArea. " cm^2"; ?></td>
							<td>radius = 7 cm</br> height = 15 cm</br><?php echo "Volume = ". $mediumCylinderVolume. " cm^3"; ?></br><?php echo "TSA = ". $mediumCylinderTotalSurfaceArea. " cm^2"; ?></td>
							<td>radius = 10 cm</br> height = 20 cm</br><?php echo "Volume = ". $largeCylinderVolume. " cm^3"; ?></br><?php echo "TSA = ". $largeCylinderTotalSurfaceArea. " cm^2"; ?></td>
							-->
							<td>radius = 5 cm</br> height = 10 cm</td>
							<td>radius = 7 cm</br> height = 15 cm</td>
							<td>radius = 10 cm</br> height = 20 cm</td>
						</tr>
						<tr>
							<td>Cube</td>
							<!-- <td>side = 5 cm</br><?php echo "Volume = ". $smallCubeVolume. " cm^3"; ?></br><?php echo "TSA = ". $smallCubeTotalSurfaceArea. " cm^2"; ?></td>
							<td>side = 10 cm</br><?php echo "Volume = ". $mediumCubeVolume. " cm^3"; ?></br><?php echo "TSA = ". $mediumCubeTotalSurfaceArea. " cm^2"; ?></td>
							<td>side = 15 cm</br><?php echo "Volume = ". $largeCubeVolume. " cm^3"; ?></br><?php echo "TSA = ". $largeCubeTotalSurfaceArea. " cm^2"; ?></td>
							-->
							<td>radius = 5 cm</td>
							<td>radius = 10 cm</td>
							<td>radius = 15 cm</td>
						</tr>
					</tbody>
				</table>
				</br>
				<h4>Prices</h4>
				<p>Base substance price : Rs. 0.5/ cm^3</p>
				<table class='table table-striped table-responsive'>
					<thead>
						<tr>
							<th>Metal</th>
							<th>Cost / gm</th>
							<th>Density (gm/cm^3)</th>
							<th>Cost / cm^3</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Copper</td>
							<td><?php echo $costCopperPerGram;?></td>
							<td><?php echo $densityCopperGmPerCm3;?></td>
							<td><?php echo $costCopperPerCm3;?> </td>
						</tr>
						<tr>
							<td>Steel</td>
							<td><?php echo $costSteelPerGram;?></td>
							<td><?php echo $densitySteelGmPerCm3;?></td>
							<td><?php echo $costSteelPerCm3;?> </td>
						</tr>
						<tr>
							<td>Aluminium</td>
							<td><?php echo $costAluminiumPerGram;?></td>
							<td><?php echo $densityAluminiumGmPerCm3;?></td>
							<td><?php echo $costAluminiumPerCm3;?> </td>
						<tr>
							<td>Gold</td>
							<td><?php echo $costGoldPerGram;?></td>
							<td><?php echo $densityGoldGmPerCm3;?></td>
							<td><?php echo $costGoldPerCm3;?> </td>
						</tr>
						<tr>
							<td>Silver</td>
							<td><?php echo $costSilverPerGram;?></td>
							<td><?php echo $densitySilverGmPerCm3;?></td>
							<td><?php echo $costSilverPerCm3;?> </td>
						</tr>
						<tr>
							<td>Bronze</td>
							<td><?php echo $costBronzePerGram;?></td>
							<td><?php echo $densityBronzeGmPerCm3;?></td>
							<td><?php echo $costBronzePerCm3;?> </td>
						</tr>
					</tbody>
				</table>
				</br>
				<h4>Formulae</h4>
				<p>Base Substance Cost = (100 - purity percentage) x (cost of base metal / cm^3)</p>
				<p>Pure Metal Cost = purity percentage x (cost of pure metal / cm^3)</p>
				<p>Shaping Cost = volume x (Base Substance Cost + Pure Metal Cost)</p>
				<p>Plating cost = thickness x (total surface area) x (cost of metal / cm^3)</p>
				<p>Total cost = Shaping Cost + Plating Cost + Tax (12.5%)</p>
			</div>
		</div>