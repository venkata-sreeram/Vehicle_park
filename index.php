<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vehicle Park by Intern_Team</title>
    <link rel="icon" href="img\ieee4.png">
    <link rel="stylesheet" href="style.css">

    <!-- Don't Change the Styles -->
	<style>
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

<!-- Body Starts -->

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
    <!-- Header Area End -->

 <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax over-shadow" style="background-image: url(img/4.bmp);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text-two text-center screen-res">
                                <div class="heading" style="color: #c89148;margin-bottom:2%;" data-animation="fadeInUp" data-delay="100ms">Vehicle Parking Management System </div>
                                <div class="heading" style="color: white;" data-animation="fadeInUp" data-delay="100ms">Confidently Park you Car </div>
                                <div class="heading" style="color: white;" data-animation="fadeInUp" data-delay="100ms">@ Vehicle Park.Online by using your Mobile</div> <br>
                                <div class="text-size" style="color:#c89148;font-weight:600" data-animation="fadeInUp" data-delay="300ms">(Vehiclepark.Online | Virtual Parking)</div> <br>
								<div class="text-size1" style="color: #4682bb;font-weight:600" data-animation="fadeInUp" data-delay="100ms">Technically Developed by Intern_Team</div>   
							</div>
                        </div>
                    </div>
                </div>
            </div>
                     <!-- Single Slide -->
          <div class="single-welcome-slide bg-img bg-overlay jarallax over-shadow" style="background-image: url(img/2.bmp);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text-two text-center screen-res">
                                <div class="heading" style="color: #c89148;margin-bottom:2%;" data-animation="fadeInUp" data-delay="100ms">Vehicle Parking Management System </div>
                                <div class="heading" style="color: white;" data-animation="fadeInUp" data-delay="100ms">Park your Bike </div>
                                <div class="heading" style="color: white;" data-animation="fadeInUp" data-delay="100ms">@ Vehicle Park.Online by using your Mobile</div><br>
								<div class="text-size" style="color:#c89148;font-weight:600" data-animation="fadeInUp" data-delay="300ms">(Vehiclepark.Online | Virtual Parking Experience)</div><br>
                                <div class="text-size1" style="color: #4682bb;font-weight:600" data-animation="fadeInUp" data-delay="100ms">Technically Developed by Intern_Team</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                      <div class="single-welcome-slide bg-img bg-overlay jarallax over-shadow" style="background-image: url(img/5.bmp);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text-two text-center screen-res">
                                <div class="heading" style="color: #c89148;margin-bottom:2%;" data-animation="fadeInUp" data-delay="100ms">Vehicle Parking Management System </div>
                                <div class="heading" style="color: white;" data-animation="fadeInUp" data-delay="100ms">Park your Bicycle </div>
                                <div class="heading" style="color: white;" data-animation="fadeInUp" data-delay="100ms">@ Vehicle Park.Online by using your Mobile</div><br>
                                <div class="text-size" style="color:#c89148;font-weight:600" data-animation="fadeInUp" data-delay="300ms">(Vehiclepark.Online | Virtual Parking Experience)</div><br>
                                <div class="text-size1" style="color: #4682bb;font-weight:600" data-animation="fadeInUp" data-delay="100ms">Technically Developed by Intern_Team</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Scroll Icon -->
      <!--   <div class="icon-scroll" id="scrollDown"></div> -->
    </section>
    
    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center"> <h1 class="text-center"> Team Members </h1><marquee><img src="img/sreeram.png" style="height:40vh; padding: 20px;" /><img src="img/amaresh.png"  style="height:40vh; padding: 20px;" /><img src="img/anitha.png" style="height:40vh; padding: 20px;" / ><img src="img/teju.png" style="height:40vh; padding: 20px;"><img src="img/sirisha.png" style="height:40vh; padding: 20px;" /><img src="img/Harshitha.png" style="height:40vh; padding: 20px;" /><img src="img/pranitha.png" style="height:40vh; padding: 20px;"></marquee>
                <div class="col-lg-6">
                    <div class="about-content-text mb-30 aboutAlign">
					
                        <h6 class="wow fadeInUp font-weight-bold" data-wow-delay="300ms" style="font-size:1.6rem;">About</h6>
                        <!-- <h3 class="wow fadeInUp" data-wow-delay="300ms">Welcome to the Project Management</h3> -->
                        <p class="wow fadeInUp" data-wow-delay="300ms"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5" style="border: 2px solid #124951;padding: 2%;">
                    <div class="post">
        <blockquote>
            <h4 class="text-left" style="color:#31abbb;">
                <i class="fa fa-history orange-text" aria-hidden="true"></i> Latest Parking Offers
            </h4>
        </blockquote>
        <hr class="notice-boxHR">
        <div class="scroll-marquee">
            <marquee direction="up" scrollamount="3" scrolldelay="100" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" height="300">
		
		 <p class="text-justify">
       <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i> 
       <span> 
       <a href="">
                    <span id="rptcircular_ctl00_Label3">Latest Offers for Students</span> <br>
					<span style='color:red;text-decoration:line-through;text-decoration-thickness: 15%'>
							 <span id="rptcircular_ctl00_Label3">August 16, 2020</span>
					</span>
					<span id="rptcircular_ctl00_Label3 font-weight-bold">&nbsp;&nbsp;August 31, 2020 </span>
                        </a>
                        </span>
                          <span id="rptcircular_ctl00_lblDesc"></span>
	</p>


		<p class="text-justify">
			   <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i> 
			   <span> 
			   <a href="">
							<span id="rptcircular_ctl00_Label3">
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<a style="font-size:1.3rem; color: #ffa00f;" href="https://www.ieee.org/conferences/publishing/templates.html" target="_blank">Park Now !</a>
								<!-- ul>
								<li class="btn"><a href="https://edas.info/N27133" style="color: #fff;"  target="_blank">paper format</a> </li> </ul -->
							</span>
								</a>
								</span>
								  <span id="rptcircular_ctl00_lblDesc"></span>
			</p>


		<p class="text-justify">
       <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i> 
       <span> 
       <a href="">
                    <span id="rptcircular_ctl00_Label3">
                        For Parking click here:
						<ul>
                        <li class="btn"><a href="park.php" style="color: #fff;" target="_blank">Park here</a> </li> </ul>
                    </span>
                        </a>
                        </span>
                          <span id="rptcircular_ctl00_lblDesc"></span>
	</p> 
  
</marquee>
        </div>
    </div>
</div>
                </div>
            </div>
        
    </section>
    <section class="about-us-countdown-area" id="theme">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <div class="about-content-text mb-30 aboutAlign" style="padding-top: 4%;">
                        <h6 class="wow fadeInUp font-weight-bold" data-wow-delay="300ms" style="font-size:1.6rem;">About The Project</h6>
                        <!-- <h3 class="wow fadeInUp" data-wow-delay="300ms">Welcome to the Project Management</h3> -->
                        <p class="wow fadeInUp" data-wow-delay="300ms">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    
       <!-- About us area ends -->


 
    <section class="our-sponsor-client-area section-padding-100" id="partners">
        <div class="main">

<h2 style="color: white;" class="text-center">Our Team Memebers</h2>
<hr>
<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="img/Harshitha.png" alt="Mountains" style="width:100%">
      </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="img/sirisha.png" alt="Lights" style="width:100%">
      </div>
  </div>
  <div class="column">
    <div class="content">
      <a href="https://venkatasreeram.live"><img src="img/sreeram.png" alt="Nature" style="width:100%"></a>
      </div>
  </div>
  <div class="column">
    <div class="content">
      <a href="https://venkatasreeram.live"><img src="img/pranitha.png" alt="Nature" style="width:100%"></a>
      </div>
  </div>
  <div class="column">
    <div class="content">
      <a href="https://venkatasreeram.live"><img src="img/amaresh.png" margin="20" alt="Nature" style="width:100%"></a>
      </div>
  </div>
  <div class="column">
    <div class="content">
      <a href="https://venkatasreeram.live"><img src="img/teju.png" margin="20" alt="Nature" style="width:100%;"></a>
      </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="img/anitha.png" alt="Mountains" style="width:100%">
      </div>
  </div>
</div>
<!-- END MAIN -->
</div>
    </section>
    <!-- Our Speakings Area End -->
    <!-- ======================================Our Sponsor==============================-->
 <!--Speaker Area End-->
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