$(document).ready(function() {

	var dl='all';
	// include 'ajax/booking_selection_data.php';
	// var college = "<?php echo $college ?>";
	// var department = "<?php echo $department ?>";
	// var formData = {'college':college,'department':department};
								$.ajax({
										type: "POST",
										url: "ajax/booking_data.php?dl="+dl, //+"&college="+college+"&department="+department,
										// data: formData,
										success: function(data)
										{
											//alert("gsdfgpjn");
											$("#example1").html(data);
											console.log(data);
												// $("#example1").DataTable();
										},
										error: function(returnval) {
										 console.log(returnval);
									 }
								});

});
