
<?php
include('../db/connection.php');
session_start();

/*$uin = $_SESSION['u_no']; */

if(isset($_REQUEST['college']) && isset($_REQUEST['department']) )
{
	$college=$_REQUEST['college'];
	$department=$_REQUEST['department'];
  $_SESSION["college"] = $college;
	$_SESSION["department"] = $department;

	if(!empty($college) && !empty($department))
	{
	$s1="SELECT count(college) as college,id,type from signup where college in ('$college') and department in ('$department')";
	foreach ($dbh->query($s1) as $r1)
		{
			$college=$r1['college'];
			$id=$r1['id'];
			$type=$r1['type'];
		}

		if($college == 0 && $id == null)
		{
			echo "<script>$('#msg1').html('your college or department not valid !!!');</script>";
		}
		else
		{
			if($type == 3)
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
			window.location.href = 'booking.php';
			</script>
			<?php
			}

		}
	}
	else
	{
		if($college == '')
			{
				echo "<script>$('#college').html('please enter  college number !!!');</script>";
			}
			else
			{
				echo "<script>$('#college').html('');</script>";
			}

			if($department == '')
			{
				echo "<script>$('#department').html('please enter department !!!');</script>";
			}
			else
			{
				echo "<script>$('#department').html('');</script>";
			}
	}
}
?>
