$(document).ready(function() {

		$(document).on("click","#submit",function()
		{
			var college=document.getElementById('college').value;
			var department=document.getElementById('department').value;

			$.ajax({
							type: "POST",
							url: "ajax/booking_selection_data.php?college="+college+"&department="+department,
							success: function(data)
							{
								//alert(data);
								$('#sub1').html(data);
								$('#c').html(data);
								$('#d').html(data);

								$('#college').val('');
								$('#department').val('');

							}
						});
		});
		$("#department").keyup(function(event){
		    if(event.keyCode == 13){
		        $("#submit").click();
		    }
		});
});
