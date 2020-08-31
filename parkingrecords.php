<?php

session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'vehicle_park');
$user=$_SESSION['user'];
$sql="SELECT * FROM $user";
$records=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>parkingrecords</title>
	<link rel="icon" href="img\ieee4.png">
    <link rel="stylesheet" href="style.css">
	<style type="text/css">
	

		th, td 
		{
    		text-align: left;
    		padding: 8px;
		}
		table {
    		border-collapse: collapse;
    		width: 100%;
  			width: 800px;
  			line-height: 40px;
  			margin-left: 350px;
  			margin-top: 150px;
  			font-size: 0.9em;
  			line-height: 40px;
  			padding:15px;
    		border: 1px solid black;
			}

		tr{background-color: #f2f2f2}


		th 
		{
  			background-color: #a64357;
  			color: white;
		}

		th {
  			background-color: #a64357;
  			color: white;
		}
		.btn{
		  border: none;
		  
		  text-align: center;
		  text-decoration: none;
		  float: right;
		  font-size: 16px;
		  margin-top: 60px;
		  margin-right: -90px;
		  cursor: pointer;
}


	</style>
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
</style>
	<link rel="stylesheet" type="text/css" href="styling.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
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
    <!-- Header Area End --><br><br>
<!-- <a class="button" href="logout.php">Logout</a> -->

<table>
	<tr>
		<th>SNO</th>
		<th>Vehicle Number</th>
		<th>In Date</th>
		<th>Out Date</th>
		<th>In Time</th>
		<th>Out Time</th>
		<th>Bill</th>
	</tr>

	<?php
	while($data=mysqli_fetch_assoc($records)){
		echo "<tr>";
		echo"<td>".$data['sno']."</td>";
		echo"<td>".$data['vehicle_no']."</td>";
		echo"<td>".$data['out_date']."</td>";
		echo"<td>".$data['in_date']."</td>";
		echo"<td>".$data['in_time']."</td>";
		echo"<td>".$data['out_time']."</td>";
		echo"<td>".$data['bill']."</td>";
		echo "</tr>";
	}
	?>
</table>
<div class="container" style="overflow-x:auto;">
<button class="btn" onclick="window.location.href='logout.php';"><b>
      LOGOUT<b>
</button>
</div>

</body>
</html>