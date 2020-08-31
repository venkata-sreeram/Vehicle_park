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
	<style>
		form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.containers {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
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
     
        
        </style>
     
     <!-- MARQUE END -->

     
     

<style>

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
.sreeram {
  
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
    <!-- Header Area End -->

  
<section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60 sreeram" id="speakers">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms"> <br>
                        
                        <h4 style="color: white;">Login Here</h4>
                        <br>
                        <br>
                        <form form action="validation.php" method="post">
  <div class="imgcontainer">
    <img src="https://thumbs.dreamstime.com/b/vector-illustration-isolated-white-background-login-button-icon-login-icon-button-127001338.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="containers">
    <label for="uname"><b style="color: white; font-size: 30px;">Username</b></label>
    <input type="text" placeholder="Enter Your Name" name="uname" required>
    <label for="password"><b style="color: white; font-size: 30px;">Password</b></label>
    <input type="password" placeholder="Enter your Password" name="uname" required>

    <button type="submit">Login</button>
    <label>
       <b style="color: white; font-size: 30px;"><a href="registrationform.php">  Are You a New User ?</b></a>
    </label>
  </div>
</form>

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