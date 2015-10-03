// estimate price on changing options in the form
$('#buy-form').change(function() {
	var shape = $("input[type='radio'][name='optionsShapeRadio']:checked").val();
	var size = $("input[type='radio'][name='optionsSizeRadio']:checked").val();
	var metal = $("input[type='radio'][name='optionsMetalRadio']:checked").val();
	var coat = $("input[type='radio'][name='optionsCoatRadio']:checked").val();
	var purity = parseFloat($("#inputPurity").val());
	var thickness = parseFloat($("#inputThickness").val());

	var ShapingCost = 0;
	// calculate and display Shaping cost
	$.post("calculateShapingCost.php", {shape:shape, size:size, metal:metal, purity:purity}, 
		function(data) {
			$("#showShapingCost").val(data);
			ShapingCost = data;

			var PlatingCost = 0;
			// calculate and display plating cost
			$.post("calculatePlatingCost.php", {shape:shape, size:size, coat: coat, thickness:thickness}, 
				function(data) {
					$("#showPlatingCost").val(data);
					//console.log(data);
					PlatingCost = data;
					
					// calculate and display total cost
					$.post("calculateTotalCost.php", {PlatingCost: parseFloat(PlatingCost), ShapingCost: parseFloat(ShapingCost)}, 
						function(data) {
							$("#showTotalCost").val(data);
							//console.log(data);
					});
			});
	});
});

// function to calculate final total cost and confirm the order
$('#f_submit').click(function(){
	// check whether username has been entered
	var username = $("#inputusername").val();
	if(username == "") {
		error_prompt("Please fill the username");
	}
	else {
		// get the data
		var shape = $("input[type='radio'][name='optionsShapeRadio']:checked").val();
		var size = $("input[type='radio'][name='optionsSizeRadio']:checked").val();
		var metal = $("input[type='radio'][name='optionsMetalRadio']:checked").val();
		var coat = $("input[type='radio'][name='optionsCoatRadio']:checked").val();
		var purity = parseFloat($("#inputPurity").val());
		var thickness = parseFloat($("#inputThickness").val());
		

		// calculate shaping cost
		var ShapingCost = 0;
		$.post("calculateShapingCost.php", {shape:shape, size:size, metal:metal, purity:purity}, 
			function(data1) {
				ShapingCost = parseFloat(data1);
				// calculate plating cost

				var PlatingCost = 0;
				$.post("calculatePlatingCost.php", {shape:shape, size:size, coat: coat, thickness:thickness}, 
					function(data2) {
						PlatingCost = parseFloat(data2);
						
						// calculate total cost
						var TotalCost = 0;
						$.post("calculateTotalCost.php", {PlatingCost: PlatingCost, ShapingCost: ShapingCost}, 
							function(data3) {
								TotalCost = parseFloat(data3);

								var description = "Shape: "  + shape  + "\nSize: " + size + "\nMetal: " + metal + "\nPurity: " + purity +  "\nCoating: "
										+ coat + "\nThickness: " + thickness;

								// proceed to insert data in database
								$.post("order.php", {username: username, PlatingCost: PlatingCost, ShapingCost: ShapingCost, TotalCost: TotalCost, 
									description: description});

								confirm_prompt('Order successful!');
						});
				});
		});
	}
});

// function for showing modal with confirm prompt
function confirm_prompt(message) {
	var full_message = "<center><h3 class='modal-title' style='color:green' id='myModalLabel'><span class='fa fa-check-square-o fa-2x'></br></span>" + message + "</h3></center>";
	$('#myModal1header').html(full_message);
	$('#myModal1').modal('show');
}

// function for showing modal with error prompt
function error_prompt(message) {
	var full_message = "<center><h3 class='modal-title' style='color:rgb(174, 29, 29)' id='myModalLabel'><span class='fa fa-times-circle-o fa-2x'></br></span> " + message + "</h3></center>";
	$('#myModal1header').html(full_message);
	$('#myModal1').modal('show');
}