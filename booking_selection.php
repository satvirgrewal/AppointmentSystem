<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- this part of code uses external css files for styles and viewport porperty to make webpages responsive -->
  <!-- This page contains form to select college and department of the professor for booking an appoinment -->
  <title>Bokking Selection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="main.css" rel="stylesheet" type="text/css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <style>
  /* this is style block to define how html elements should be rendered in the browser */
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
	  HEIGHT:100%;

  }
 .lbl
 {
	 color:red;
 }

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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
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
">Dwight Look College of Engineering</a></li>
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
    <!-- placement of mascot on navigation bar -->
    	<ul class="nav navbar-nav navbar-right " id="navbar-mobile">
				<li  ><img src="pro2.jpg" class="img-responsive" alt="Chania"  style="padding-top:20px;padding-bottom:20px;"></li>
			</ul>
        </div>
    </div>
</nav>
<!--   main page content for college and department selection form  -->
<h1 style="padding-left:25px;text-align:center">Let's book an appointment!!</h1>
<div class="container-fluid bg-main" style="height:400px;">
  <div class="row">
   <div class="col-md-12" >

    <div class="col-md-5">
	</div>
    <div class="col-md-2">
  <p style="font-size: 30px;">
    <div class="form-area">
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Select college and department of professor</h3>


          <div class="form-group">
            <select class="form-control input-sm" id="college" >
                <option selected="default" value='0' disabled>---Select your college---</option>
                  <option value='Mays Business School' >Mays Business School</option>
                  <option  value='Dwight Look College of Engineering' >Dwight Look College of Engineering</option>
                  <option  value='Other' >Other</option>

              </select>

              <label class="lbl" id="c"></label>
          </div>

          <div class="form-group">
            <select class="form-control input-sm" id="department" >
                <option selected="default" value='0' disabled>---Select your department---</option>
                  <option value='INFO' >INFO</option>
                  <option  value='Marketing' >Marketing</option>
                  <option  value='Finace' >Finace</option>
                  <option value='Computer Science' >Computer Science</option>
                  <option  value='Civil Engineering' >Civil Engineering</option>
                  <option  value='Aerospace Engineering' >Aerospace Engineering</option>
                  <option  value='Other' >Other</option>
              </select>

              <label class="lbl" id="d"></label>
          </div>

			<center>

        <button type="button" id="submit" name="submit" class="btn btn-primary pull-center" style="margin-center:120px;size:50px;">submit</button>
		<label class="lbl" id='sub1'></label>
		</center>
        </form>
    </div>
    </div>
	<div class="col-md-5">
	</div>
  </div>
</div>
</div>

<!--   main content of booking selection form over  -->
<!-- footer bar that displays A&M maroon color that makes emotional connection to users -->

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
<!-- page script to execute when form is submitted -->
<script src="js/booking_selection.js"></script>
</body>
</html>
