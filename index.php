<!DOCTYPE html>
<html lang="en">
<head>
  <!-- this part of code uses external css files for styles and viewport porperty to make webpages responsive -->
  <title>Home Page</title>
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" min-height: 100%;>
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
				<li  ><img src="TAM-Logo.jpg" class="img-responsive" alt="Chania"  style="padding-top:20px;padding-bottom:20px;" id="navbar-mobile">  </li>
				<li  ><h1 style="padding-left:20px;color:white;">Howdy<br/> Professor</h1></li>
			</ul>
            <ul class="nav navbar-nav navbar-center" style="background-color:#009591; margin-top:25px;margin-left:50px;">
      <li class="navigation fnt"><a href="index.php" style="
    padding-left: 20px;
    padding-right: 50px;
">HOME</a></li> <!-- navigation option for home -->

      <li  class="navigation fnt"><a href="about.php"style="
    padding-left: 20px;
    padding-right: 50px;
">ABOUT US</a></li> <!-- navigation option for about us -->
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
">CONTACT</a></li> <!-- navigation option for contact -->

    </ul>
<!-- placement of mascot on navigation bar -->
	<ul class="nav navbar-nav navbar-right "  id="navbar-mobile">
				<li  ><img src="crono.jpg" class="img-responsive" alt="Chania"  style="padding-top:20px;padding-bottom:20px;"></li>
			</ul>
        </div>
    </div>
</nav>

<!-- container for moving slides below navigation bar -->
<div class="container" style="line-height:0px;width:100%;">
<div class="row">
<div class="col-md-12">

  <br>
  <!-- carousel for moving images/slide show, this will make users to anticipate and spend more time on the website  -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides, this part contain various images displayed on the slides -->
    <div class="carousel-inner" role="listbox" >
      <div class="item active">
        <img src="home-tamu.jpg" class="img-responsive" alt="Chania" >
      </div>

      <div class="item">
        <img src="prof-dev.jpg" class="img-responsive" alt="Chania" >
      </div>

      <div class="item">
        <img src="12thman.jpg" class="img-responsive" alt="Flower" >
      </div>

      <div class="item">
        <img src="college-front.jpg" class="img-responsive" alt="Flower" >
      </div>
    </div>

    <!-- Left and right controls, for the moving images, to see left and right images by manuallly clicking on the arrows -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div>
</div>

<!-- container for part below the moving images, this part displays message to users, makes informal connection and motivates user to use the system -->
<div class="container-fluid">
  <div class="row">
  <div class="col-md-12" style="padding-top: 25px;padding-bottom: 75px;">
  <div class="col-md-4">
  </div>

  <div class="col-md-4">
      <h2 style="text-align:center"> Say Howdy !!! to your professor</h2>
      <h4 style="text-align:center"> Now scheduling an appointment with your professor is clicks away. The online appointment system is here to help you.
        See availability of the professors, book an appointment, or see your scheduled appointments all in one place. So book your appointment
         right away and say Howdy !!! to your professor.
      </h4>
    </div>
  </div>
</div>
</div>

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
</body>
</html>
