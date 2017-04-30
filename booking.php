<?php
session_start();
/*if(!isset($_SESSION['id']))
{
	header("Location: signin.php");
} */
?>
<!DOCTYPE html>
<html>
<head>
  <!-- this part of code uses external css files for styles and viewport porperty to make webpages responsive -->
  <!-- This page contains list of Professors to select and book an appoinment based on the college and department selected on previous page -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Booking Page</title>

   <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link href="main.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
  /* this is style block to define how html elements should be rendered in the browser */

     /* Desktop layout of Howdy Professor */
   #navbar-mobile{
     display: block;
   }
   h2{
     font-size: 2em;
     font-weight: bold;
   }
   .navbar-center{
     margin: 25px 0px 0px 25px;
   }
   /* Mobile layout of Howdy Professor uses media queries to adjust layout based on the device size */
   @media (max-width: 768px){
     #navbar-mobile{
       display: none; /* Only show very important content in mobile version*/
     }
     h2{
       font-size: 2em; /* font weight is not bold in mobile version to make it astetically pleasing */
     }
     .nav h1 {
       text-align: center;
     }
     .navbar-center{
       margin-left: 0px;
       width: 100%;
       height: 100%;
     }
   }
     /* End of style formatting of html page */
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<?php

if(!isset($_SESSION['id']) )  /* If user is not signed in then show default options for navigation to user*/
{
  include "ajax/booking_selection_data.php";
  // echo $college;

?>
 <div class="container"> <!-- Container inside page body  -->
<div class="row">
<div class="col-md-12">

<div class="col-md-4">
</div>
<div class="col-md-4">
</div> <!-- Division for sign up and sign in button at the top -->

<div class="col-md-4 pull-right" style="padding-bottom:10px;padding-top:10px;">

<a href="signup.php" ><button type="button" class="btn btn-primary">sign up</button></a>

<a href="signin.php"><button type="button" class="btn btn-primary">sign in</button></a>

</div>
</div>
</div>
</div>
<!-- navigation bar that contains A&M logo, mascot, and navigation options for the users -->
<nav class="navbar navbar-inverse navbar-static-top navi" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-left ">
				<li  ><img src="pro1.jpg" class="img-responsive" alt="Chania"  style="padding-top:20px;padding-bottom:20px;" id="navbar-mobile"></li>
				<li  ><h1 style="padding-left:20px;color:white;">Howdy<br/> Professor</h1></li>
			</ul>
            <ul class="nav navbar-nav navbar-center" style="background-color:#009591;">
      <li class="navigation fnt"><a href="index.php" style="
    padding-left: 20px;
    padding-right: 50px;
">HOME</a></li> <!-- navigation option for home -->

      <li  class="navigation fnt"><a href="about.php"style="
    padding-left: 20px;
    padding-right: 50px;
">ABOUT US</a></li> <!-- navigation option for About us -->
        <li class="dropdown navigation fnt" style="
        padding-left: 5px;
        padding-right: 50px;">
        <a class="dropdown-toggle navigation " data-toggle="dropdown" href="#">DEPARTMENT <!-- navigation option for department -->
        <span class="caret"></span></a>
        <ul class="dropdown-menu ">
          <li><a href="mcg.php"  style="
    padding-left: 20px;
    padding-right: 50px;
">Mays Business School</a></li>
          <li class="navigation "><a href="detal.php"style="
    padding-left: 20px;
    padding-right: 50px;
">Dwight Look college of Engineering</a></li>
          <li class="navigation "><a href="other.php"style="
    padding-left: 20px;
    padding-right: 50px;
">Other</a></li>
        </ul>
      </li>
      <li class="navigation   fnt"><a href="contact.php"style="
    padding-left: 20px;
    padding-right: 50px;
">CONTACT</a></li> <!-- navigation option for Contact -->

    </ul>

	<ul class="nav navbar-nav navbar-right " id="navbar-mobile">
				<li  ><img src="pro2.jpg" class="img-responsive" alt="Chania"  style="padding-top:20px;padding-bottom:20px;"></li>
			</ul>
        </div>
    </div>
</nav>
<?php
}
else // if user is signed in and autheticated from the session id then show list of professors for booking an appoinment
{
	?>
<!-- navigation bar that contains A&M logo, mascot, and navigation options for the users -->
<nav class="navbar navbar-inverse navbar-static-top navi" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-left ">
				<li  ><img src="pro1.jpg" class="img-responsive" alt="Chania"  style="padding-top:20px;padding-bottom:20px;" id="navbar-mobile"></li>
				<li  ><h1 style="padding-left:20px;color:white;">Howdy<br/> Professor</h1></li>
			</ul>
            <ul class="nav navbar-nav navbar-center " style="background-color:#009591;">
	<li class="navigation   fnt"><a href="booking_selection.php"style="padding-left: 50px;padding-right: 30px;">Appointment Booking</a></li>
   <li class="navigation   fnt"><a href="student_calendar.php"style="padding-left: 50px;padding-right: 30px;">My Scheduler</a></li>
    <li class="navigation   fnt"><a href="logout.php?logout"style="padding-left: 50px;padding-right: 30px;">Logout</a></li>

    </ul>
	<ul class="nav navbar-nav navbar-right ">
				<li  ><img src="pro2.jpg" class="img-responsive" alt="Chania"  style="padding-top:20px;padding-bottom:20px;"></li>
			</ul>
        </div>
    </div>
</nav>


	<?php
}
?>

    <!-- Main content -->

    <section class="content">

		<!-- /.Start Table Div -->
		<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div >
              <h1 class="box-title" style="text-align:center;" >Faculty</h1>

<tr><td> <input type="hidden" name="type" value="<?= $college ?>" ></td></tr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<table id="example2" class="table table-bordered table-striped">

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  <div class="container">
	  <div class="row">
        <div class="col-md-12">
			<div id="example1">
			</div>
		</div>
	</div>
	</div>
    </section>
   <!-- /.content -->
	</div>

  <!-- /.content-wrapper -->
  <div class="navbar navbar-default navbar-fixed-bottom grey">
    <div class="container">
      <div class="row">
		<div class="col-md-12">
      <p class="navbar-text pull-left" >

      </p>
	  </div>
	  </div>

    </div>


  </div>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  <div class="col-md-4">
</div>

<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script src="js/booking_data.js"></script>

</body>
</html>
