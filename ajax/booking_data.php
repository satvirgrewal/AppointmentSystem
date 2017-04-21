

<?php
session_start();
include('../db/connection.php');

// if(isset($_REQUEST['dl']) && isset($_REQUEST['college']) && isset($_REQUEST['department']))
if(isset($_REQUEST['dl']))
{
/*include 'ajax/booking_selection_data.php';
echo $college */

											$college=$_SESSION['college'];
											$department=$_SESSION['department'];

											// Destroying the temporary session variables
											if (isset($_SESSION['college'])){
												unset($_SESSION['college']);
												unset($_SESSION['department']);
											}

											$sql = "SELECT * FROM `profile` as p, `signup` as s where s.college=p.dept and s.college in ('$college') and s.department in ('$department') group by p.staff_id";
											//$sql = "SELECT * FROM `profile` as p, `signup` as s where p.staff_id=s.id and s.college in ('$college') and s.department in ('$department')";
											//$sql = "SELECT * FROM `profile`";
												foreach ($dbh->query($sql) as $row)
												{
													//$user_id=$row['user_id'];

													$target='upload_image/'.$row['file'];
													//$targetPath = $_SERVER['DOCUMENT_ROOT'].'/harsh/'.'upload_image/'.$row['file'];

										?>
										<div class="col-md-4">
			                               <div class="panel panel-default">
									<?php
									  $s1="SELECT `name` FROM `signup` WHERE id='".$row['staff_id']."'";
									  foreach ($dbh->query($s1) as $row1)
									  {
										  $name=$row1['name'];
									  }
									?>
									<div class="panel-heading"><center><h3><?php echo $name; ?></h3></center></div>
									<div><?php echo $sql; ?></div>
									<div class="panel-body"><center><img src="<?php echo $target; ?>" width="100px" height="100px"></center>
									<br/>
									<center style="color:green;"><h3><?php echo $row['dept']; ?></h3></center>
									<br/>
									<center><h4><?php echo $row['time_slot'].'min'.' '.'| Availability'; ?></h4> </center>
									</div>
									<center>
									<div class="panel-footer"><a href="booking_calendar.php?id=<?php echo $row['staff_id'];?>"><button  class="btn_up btn btn-primary"  value="<?php echo $row['staff_id']; ?>" >Book it</button></a></div>
									</center>
									</div>
									</div>



								<?php

										}
								?>



	<?php
}
?>
