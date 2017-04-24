$(document).ready(function() {

		$(document).on("click","#login",function()
		{
			var u_no=document.getElementById('u_no').value;
			var password=document.getElementById('password').value;

			$.ajax({
							type: "POST",
							url: "ajax/signin_data.php?u_no="+u_no+"&password="+password,
							success: function(data)
							{
								//alert(data);
								$('#msg1').html(data);
								$('#uin').html(data);
								$('#email').html(data);

								$('#u_no').val('');
								$('#password').val('');

							}
						});
		});
		$("#password").keyup(function(event){
		    if(event.keyCode == 13){
		        $("#login").click();
		    }
		});
});
