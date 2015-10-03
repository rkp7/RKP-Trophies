	<div class="col-lg-6">
			<form class="form-horizontal" id="buy-form">
				<fieldset>
					<legend>Order</legend>
					<div class="form-group">
						<label for="inputusername" class="col-lg-2 control-label">Username</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="inputusername" id="inputusername" maxlength=15 placeholder="Username" required>
						</div>
					</div>
					<div class="form-group">
						<label for="inputShape" class="col-lg-2 control-label">Trophy Shape</label>
						<div class="col-lg-10">
							<div class="radio">
							<label><input type="radio" name="optionsShapeRadio" id="optionsShapeRadio1" value="Sphere" checked>Sphere</label> &nbsp; &nbsp;
							<label><input type="radio" name="optionsShapeRadio" id="optionsShapeRadio2" value="Cylinder">Cylinder</label> &nbsp; &nbsp;
							<label><input type="radio" name="optionsShapeRadio" id="optionsShapeRadio3" value="Cube">Cube</label> &nbsp; &nbsp;
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="inputSize" class="col-lg-2 control-label">Trophy Size</label>
						<div class="col-lg-10">
							<div class="radio">
							<label><input type="radio" name="optionsSizeRadio" id="optionsSizeRadio1" value="Small" checked>Small</label>&nbsp;&nbsp;
							<label><input type="radio" name="optionsSizeRadio" id="optionsSizeRadio2" value="Medium">Medium</label>&nbsp;&nbsp;
							<label><input type="radio" name="optionsSizeRadio" id="optionsSizeRadio3" value="Large">Large</label> &nbsp;&nbsp;
							</div>
						</div>
					</div>


					<div class="form-group">
						<label for="inputMetal" class="col-lg-2 control-label">Metal used</label>
						<div class="col-lg-10">
							<div class="radio">
							<label><input type="radio" name="optionsMetalRadio" id="optionsMetalRadio1" value="Copper" checked>Copper</label>&nbsp; &nbsp;
							<label><input type="radio" name="optionsMetalRadio" id="optionsMetalRadio2" value="Steel">Steel</label>&nbsp; &nbsp;
							<label><input type="radio" name="optionsMetalRadio" id="optionsMetalRadio3" value="Aluminium">Aluminium</label>&nbsp; &nbsp;
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="inputPurity" class="col-lg-2 control-label">Purity of Metal</label>
						<div class="col-lg-10">
							<select class="form-control" id="inputPurity">
								<?php
								for($p = 100; $p > 0; $p -= 5) {
									?>
									<option value=<?php echo $p; ?> ><?php echo $p; ?> &#37;</option>
									<?php
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="showShapingCost" class="col-lg-2 control-label">Shaping Cost (Rs.)</label>
						<div class="col-lg-10">
							<input class="form-control" type="decimal" id="showShapingCost" name="showShapingCost" disabled>
						</div>
					</div>

					<div class="form-group">
						<label for="inputCoat" class="col-lg-2 control-label">Coating layer</label>
						<div class="col-lg-10">
							<div class="radio">
							<label><input type="radio" name="optionsCoatRadio" id="optionsCoatRadio1" value="Gold" checked>Gold</label>&nbsp;&nbsp;
							<label><input type="radio" name="optionsCoatRadio" id="optionsCoatRadio2" value="Silver">Silver</label>&nbsp;&nbsp;
							<label><input type="radio" name="optionsCoatRadio" id="optionsCoatRadio3" value="Bronze">Bronze</label>&nbsp;&nbsp;
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="inputThickness" class="col-lg-2 control-label">Thickness of coating layer</label>
						<div class="col-lg-10">
							<select class="form-control" id="inputThickness">
								<?php
								for($p = 1; $p <= 10; $p += 1) {
									?>
									<option value=<?php echo $p; ?> ><?php echo $p; ?> mm</option>
									<?php
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="showPlatingCost" class="col-lg-2 control-label">Plating Cost (Rs.)</label>
						<div class="col-lg-10">
							<input class="form-control" type="decimal" id="showPlatingCost" name="showPlatingCost" disabled>
						</div>
					</div>

					<div class="form-group">
						<label for="showTotalCost" class="col-lg-2 control-label">Total Cost (Rs.)</label>
						<div class="col-lg-10">
							<input class="form-control" type="decimal" id="showTotalCost" name="showTotalCost" disabled>
						</div>
					</div>

					<center><a id="f_submit" name="f_submit" class="btn btn-primary">Confirm Order</a></center>
				</fieldset>
			</form>
		</div>
		<script type="text/javascript" src="js/formvalidation.js"></script>