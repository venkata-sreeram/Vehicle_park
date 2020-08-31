<?php
session_start();
?>
<!-- Need to be Improved..... not Aligned Properly-->

<!DOCTYPE html>
<html>
<head>
	<title>parked</title>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vehicle Park by Intern_Team</title>
    <link rel="icon" href="img\ieee4.png">
    <link rel="stylesheet" href="style.css">

    <!-- Don't Change the Styles -->
	<style>
.body {
	background-image: url(https://www.newenglandsealcoating.com/wp-content/uploads/2018/05/shutterstock_668012443-1200x675.jpg)
}
        /* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column (if you want) */
.row,
.row > .column {
  padding: 2px;
}

/* Create four equal columns that floats next to each other */


.column {
  float: left;
  width: 25%;
  padding: 0px;
}
/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  
  padding: 25px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
    .video {
  width: 100%;
  height: auto;

  }
  .res {
    width: 100%;
    height: auto;
  }
}
@media screen and (max-width: 410px) {
  .res {
    width: 100%;
    height: auto;
  }
}
@media screen and (max-width: 700px) {
  .res {
    width: 100%;
    height: auto;
  }
}
@media screen and (max-width: 800px) {
  .res {
    width: 100%;
    height: auto;
  }
}
@media screen and (max-width: 1024px) {
  .res {
    width: 100%;
    height: auto;
  }
}
    	.post span,h6,a{
    		color:white;
    	}
        .marquee {
         width: 100%;
         margin: 0 auto;
         overflow: hidden;
         white-space: nowrap;
         box-sizing: border-box;
         animation: marquee 40s linear infinite;
     }
     
     .marquee:hover {
         animation-play-state: paused
     }
     /* Make it move */
     @keyframes marquee {
         0%   { text-indent: 27.5em }
         100% { text-indent: -105em }
     }
	.video {
		background-color: #0f4c75;
	}

         .nitslogo{
            margin-right:10%;
        }
        .ieeelogo{
            margin-right:-10%;
        }
    .over-shadow::after{
         content: ""; 
    position: absolute;
    top: 0;
    left: 0;
    width: 60%;
    height: 80vh;margin-left:20vw;
    background:#000000 !important;
    opacity: .8;
    margin-top:14vh;
    }
    .text-size{
        font-size:1.4rem;
    }
    .text-size1{
        font-size:1.6rem;
    }
        #more {display: none;}
        #moreAboutTheme {display: none;}
        #moreAboutNit {display: none;}
    .screen-res .heading{
        font-size:2.2rem;
        font-family: "Poppins", sans-serif;
        font-weight: 600;
    }
      @media only screen and (max-width: 767px) {
            .screen-res .heading{
                font-size:1.3rem;
              } 
              .text-size, .text-size1{
                font-size:1.2rem;
              }
              .nitslogo{
            margin-right:10%;
        }
        .ieeelogo{
            margin-right:-10%;
        }
            .over-shadow::after{
         content: ""; 
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 90vh;
    margin-left:0;
    background:#000000 !important;
    opacity: .8;
    margin-top:0;
    }

    }    

	.btn{
    border:2px solid #ffa00f;
    padding:10px;
    margin-left:20%;
}
.btn a:hover{
    text-decoration:none;
}

</style>
</head>

<body>

<!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <!-- nav class="classy-navbar justify-content-between" id="conferNav" style="margin-left:6%;" -->
				<nav class="classy-navbar justify-content-between" id="conferNav" style="margin-left:-6%;">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <b style="color: yellow; font-size: 20px;"> Vehicle Parking Management System </b>
                   <!-- <a href="https://venkatasreeram.live" target="_blank"><img src="img\nitl.png" alt="" width="300px" height="10px" class="nitslogo"></a> -->
                    <!-- Menu -->           
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="index.php#about">About Us</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="Contact_Us.html">Contact US</a>
                                </li>
                                <li><a href="login.php">Login</a>
                                </li>
                                <li><a href="registrationform.php">Register</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                     
                    
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End --><br><br><br><br><br><br><br><br>
    <section>
<div class="a" class="Success">	
	<form action="out.php" method="post">
		<div class="alert alert-success">
  	<strong>Success!</strong> Your Vehicle is Parked Sucessfully !
	</div>
		<button type="submit" name="update" class="btn btn-primary">Vehicle Out</button>
	</form>				
</div>
</section>
<!-- Footer Area Start -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0" id="contact">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">
                            <!-- Footer Logo -->
                            <a href="www.nits.ac.in" class="footer-logo"><img src="img\nitl.png" alt="" width="150px" height="150px"></a>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">
                            <!-- Widget Title -->
                            <!-- Contact Area -->
                            <div class="footer-contact-info">
                                <p><i class="zmdi zmdi-account"></i>Mr.Venkata Sreeram</p>
                                <p><i class="zmdi zmdi-account-box-o"></i>Information Support</p>
                                <p><i class="zmdi zmdi-phone"></i>+91-9573979038</p>
                                <p><i class="zmdi zmdi-email"></i>info@vehiclepark.online</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">
                            <div class="footer-contact-info">
                             <p><i class="zmdi zmdi-account"></i>Ms. Laxmi Pranitha</p>
                                <p><i class="zmdi zmdi-account-box-o"></i>Technical Support</p>
                                <p><i class="zmdi zmdi-phone"></i>+91-1234567890</p>
                                <p><i class="zmdi zmdi-email"></i>tech@vehiclepark.online</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">
                            <div class="footer-contact-info">
                             <p><i class="zmdi zmdi-account"></i>Ms. Anitha Ilavarapu</p>
                                <p><i class="zmdi zmdi-account-box-o"></i>Contact Support</p>
                                <p><i class="zmdi zmdi-phone"></i>+91-1234567890</p>
                                <p><i class="zmdi zmdi-email"></i>contact@vehiclepark.online</p>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
                    <!-- Single Footer Widget Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row">
                    <!-- Footer Menu -->
                    <div class="col-lg-12 col-md-6">
                        <div class="footer-menu text-center">
                                <p style="color: white;">Copyrights © Intern_Team  ||  Made with 💛 during Web-Development Internship @ Brain O Vision
                                </p>
                                
                            
                            <ul class="nav text-center">
                                <li style="margin:11px 0 0 24px;"><a style="font-size: 16px;" href="https://www.linkedin.com/in/venkata-sreeram/" target="_blank">Venkata Sreeram</a></li>
                                <li style="margin:11px 0 0 24px;"><a style="font-size: 16px;" href="https://www.linkedin.com/in/ankit-srivastava-oa68oa/" target="_blank">Harshitha Mittapalli</a></li>
                                <li style="margin:11px 0 0 24px;"><a style="font-size: 16px;" href="https://www.linkedin.com/in/ankit-srivastava-oa68oa/" target="_blank">Laxmi Pranitha</a></li>
                                <li style="margin:11px 0 0 24px;"><a style="font-size: 16px;" href="https://www.linkedin.com/in/ankit-srivastava-oa68oa/" target="_blank">Anitha Ilavarapu</a></li>
                                <li style="margin:11px 0 0 24px;"><a style="font-size: 16px;" href="https://www.linkedin.com/in/ankit-srivastava-oa68oa/" target="_blank">Tejaswini</a></li>
                                <li style="margin:11px 0 0 24px;"><a style="font-size: 16px;" href="https://www.linkedin.com/in/ankit-srivastava-oa68oa/" target="_blank">Sirisha</a></li>
                                <li style="margin:11px 0 0 24px;"><a style="font-size: 16px;" href="https://www.linkedin.com/in/ankit-srivastava-oa68oa/" target="_blank">Amaresh</a></li>
                                <li style="margin:11px 0 0 24px;"><a style="font-size: 16px;" href="https://www.linkedin.com/in/ankit-srivastava-oa68oa/" target="_blank">Shaik Karimulla</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
    <!-- jQuery 2.2.4 -->
    <script src="js\jquery.min.js"></script>
    <!-- Popper -->
    <script src="js\popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js\bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js\confer.bundle.js"></script>
    <!-- Active -->
    <script src="js\default-assets\active.js"></script>
        <script src="js\readMore.js"></script>
         <!-- Countdown -->
    <script src="js\countdown.js"></script>
</body>
</html>