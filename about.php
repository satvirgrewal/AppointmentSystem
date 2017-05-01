<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="main.css" rel="stylesheet" type="text/css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
	  HEIGHT:50%;

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
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="col-md-4">
</div>


<div class="col-md-4">



</div>

<div class="col-md-4 pull-right" style="padding-bottom:10px;padding-top:10px;">

<a href="signup.php" ><button type="button" class="btn btn-primary">sign up</button></a>

<a href="signin.php" ><button type="button" class="btn btn-primary">sign in</button></a>

</div>
</div>

</div>

</div>
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
">HOME</a></li>

      <li  class="navigation fnt"><a href="about.php"style="
    padding-left: 20px;
    padding-right: 50px;
">ABOUT US</a></li>
        <li class="dropdown navigation fnt" style="
        padding-left: 5px;
        padding-right: 50px;">
        <a class="dropdown-toggle navigation " data-toggle="dropdown" href="#">DEPARTMENT
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
">CONTACT</a></li>

    </ul>

	<ul class="nav navbar-nav navbar-right " id="navbar-mobile">
				<li  ><img src="pro2.jpg" class="img-responsive" alt="Chania"  style="padding-top:20px;padding-bottom:20px;"></li>
			</ul>
        </div>
    </div>
</nav>


<!--   main  -->
<h1 style="padding-left:25px;">About Us</h1>
<div class="container-fluid bg-main" >
  <div class="row">
   <div class="col-md-12">

    <div class="col-sm-4" style="
    padding-top: 100px;
    padding-bottom: 100px;
    padding-left: 100px;
">
      <img id="map" class="img-responsive" src="about.jpg" style="height: 282px; text-align: center">
    </div>
    <div class="col-sm-8" style="padding-top: 100px;">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission is providing the web-based appointment system for the students to schedule meetings with the professor and for the professors to manage the appointments with a few clicks of a button. Given the number of students, this website will not only allow the desktop users but also the tablet and mobile phone users to use the functionality.</h4><br>
      <p><strong>VISION:</strong> The website is an online appointment booking system to schedule meetings between the students and the professor. Texas A&M University has more than 60000 students enrolled and is home to more than 3500 faculty members. The student diaspora is diverse with many international students as well as students from other parts of the United States enroll at Texas A&M University for their respective degrees. This makes it very crucial that the students get the required guidance for their courses, research, and advising from the professors and senior faculty members</p>
    </div>
  </div>
</div>
</div>


<!--   main over -->

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


</body>
</html>
