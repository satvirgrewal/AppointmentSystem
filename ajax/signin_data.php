<?php
include('../db/connection.php');
session_start();

if(isset($_REQUEST['u_no']) && isset($_REQUEST['password']) )
{
	$uin=$_REQUEST['u_no'];
	$password=$_REQUEST['password'];

	$_SESSION['u_no'] = $uin;


	if(!empty($uin) && !empty($password))
	{
	$s1="SELECT count(uin) as uin,id,type from signup where uin in ('$uin') and pass in ('$password')";
	foreach ($dbh->query($s1) as $r1)
		{
			$uin=$r1['uin'];
			$id=$r1['id'];
			$type=$r1['type'];
		}

		if($uin == 0 && $id == null)
		{
			echo "<script>$('#msg1').html('your UIN or password not valid !!!');</script>";
		}
		else
		{
			if($type == 2)
			{
				$_SESSION['id'] = $id;

			?>
			<script>
			window.location.href = 'staff_profile.php';
			</script>
			<?php
			}
			else{
				$_SESSION['id'] = $id;

			?>
			<script>
			window.location.href = 'booking_selection.php';
			</script>
			<?php
			}

		}
	}
	else
	{
		if($uin == '')
			{
				echo "<script>$('#uin').html('please enter  UIN number !!!');</script>";
			}
			else
			{
				echo "<script>$('#uin').html('');</script>";
			}

			if($password == '')
			{
				echo "<script>$('#password').html('please enter password !!!');</script>";
			}
			else
			{
				echo "<script>$('#password').html('');</script>";
			}
	}
}
?>
