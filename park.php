<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Park A Vehicle</title>
	<link rel="stylesheet" type="text/css" href="styling.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style type="text/css">
		h1{
	color: #fff !important;
	margin-top:150px !important;
	margin-left: 200px;
	text-transform: uppercase;
}
.cc-selector input {
  margin: 0;
  padding: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.cat {
  background-image: url(https://imgd.aeplcdn.com/600x337/n/cw/ec/41197/hyundai-verna-right-front-three-quarter7.jpeg);
}

.dog {
  background-image: url(https://5.imimg.com/data5/QP/WJ/MY-989864/yamaha-bike-500x500.png);
}
.pig {
  background-image: url(https://images-na.ssl-images-amazon.com/images/I/818BWCuUFIL._SX425_.jpg)
}
.cc-selector-2 input:active +.drinkcard-cc,
.cc-selector input:active +.drinkcard-cc {
  opacity: .9;
}

.cc-selector-2 input:checked +.drinkcard-cc,
.cc-selector input:checked +.drinkcard-cc {
  -webkit-filter: none;
  -moz-filter: none;
  filter: none;
}


.drinkcard-cc {
  cursor: pointer;
  background-size: contain;
  transition: transform .2s;
  background-repeat: no-repeat;
  display: inline-block;
  width: 100px;
  height: 70px;
  -webkit-transition: all 100ms ease-in;
  -moz-transition: all 100ms ease-in;
  transition: all 100ms ease-in;
  -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
  -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
  filter: brightness(1.8) grayscale(1) opacity(.7);
}

.drinkcard-cc:hover {
  -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
  -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
  filter: brightness(1.2) grayscale(.5) opacity(.9); 
  transform: scale(1.2);
}


/* Extras */

a:visited {
  color: #888
}

a {
  color: #444;
  text-decoration: none;
}

p {
  margin-bottom: 1em;
}
div {padding: 1em;}

h2{
	text-align: center;
	text-transform: uppercase;
}
	</style>
</head>
<body>
<a class="float-right" href="logout.php">Logout</a>
<h1>Park a Vehicle</h1>
<div class="container">
	<div class="box">
		<div class="row">
			<div class="col-md-6">
				<form action="parksdata.php" method="post">
  <p>Select the Vehicle Type </p>
  <div class="cc-selector">
    <input id="cat" type="radio" name="credit-card" value="cat" />
    <label class="drinkcard-cc cat" for="cat"></label>
    <input id="pig" type="radio" name="credit-card" value="pig" />
    <label class="drinkcard-cc pig" for="pig"></label>
    <input id="dog" type="radio" name="credit-card" value="dog" />
    <label class="drinkcard-cc dog" for="dog"></label>    <br>
    Username <input type="text" name="uname" placeholder="Username"> <br>
    Password <input type="password" name="pword" placeholder="password"> <br>
    <input type="submit" name="submit" >
    
  </div>
</form>

			</div>
		</div>
	</div>
</div>
</body>
</html>