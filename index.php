<?php
	session_start();
	include_once "./install.php";
	include_once "./lib/tbl_get_rows.php";
	$men = tbl_get_rows($con, "Men");
	$women = tbl_get_rows($con, "Women");
	$children = tbl_get_rows($con, "Children");
?>
<html>
	<head>
		<title>WEBSITE</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body >
		<div id="menu">
            <div id="left">
			    <div class="dropdown">
				<button class="button darkblue">WOMEN</button>
				<div class="dropdown-content darkblue">
					<a href="women.php">Clothes</a>
					<a href="women.php">Shoes</a>
					<a href="women.php">Accessoires</a>
				</div>
			    </div>
			    <div class="dropdown">
				<button class="button seablue">MEN</button>
				<div class="dropdown-content seablue">
					<a href="#">Trousers</a>
					<a href="#">Shirts</a>
					<a href="#">Shoes</a>
					<a href="#">Underwear</a>
				</div>
			    </div>
			    <div class="dropdown">
				<button class="button middleblue">CHILDREN</button>
				<div class="dropdown-content middleblue">
					<a href="#">Clothes</a>
					<a href="#">Shoes</a>
					<a href="#">Accessoires</a>
				</div>
                </div>
            </div>
            <div id="middle">
                <h1><a class="homepage" href="index.php">NAME OF WEBSITE</a></h1>
            </div>
            <div id="push">
			    <div class="dropdown">
				<button class="button lightblue">BASKET</button>
				<div class="dropdown-content lightblue">
					<a href="basket.php">See your basket</a>
					<a href="#">Empty basket</a>
					<a href="#">Checkout</a>
				</div>
			    </div>
			    <div class="dropdown">
				<button class="button verylightblue">USERPAGE</button>
				<div class="dropdown-content verylightblue">
					<a href="login.php">Login</a>
					<a href="modif.php">Change your password</a>
					<a href="create.php">Create a user</a>
				</div>
                </div>
            </div>
		</div>
		<form class="search">
  			<input type="text" name="search" placeholder="Search for an article..">
		</form>
		<br>
		<div id="center">
			<div class="row">
				<div class="column">
					<p><? echo $men[0]['description'];?></p>
					<a href="#"><img class="pic" src=<? echo $men[0]['img'];?>></a>
  				</div>
  				<div class="column">
					<p><? echo $women[0]['description']; ?></p>
					<a href="#"><img class="pic" src=<? echo $women[0]['img']?>></a>
  				</div>
  				<div class="column">
					<p><? echo $children[0]['description'];?></p>
					<a href="#"><img class="pic" src=<? echo $children[0]['img'];?>></a>
  				</div>
			</div>
			<div class="row">
				<div class="column">
					<p><? echo $men[3]['description'];?></p>
					<a href="#"><img class="pic" src=<? echo $men[3]['img'];?>></a>
  				</div>
  				<div class="column">
					  <p><? echo $women[3]['description']; ?></p>
					  <p><a href="#"><img class="pic" src=<? echo $women[3]['img']?>></a></p>
  				</div>
  				<div class="column">
					  <p><? echo $children[3]['description'];?></p>
					  <p><a href="#"><img class="pic" src=<? echo $children[3]['img'];?>></a></p>
  				</div>
			</div>
			<div class="row">
				<div class="column">
					<p><? echo $men[6]['description'];?></p>
					<a href="#"><img class="pic" src="img/CHILDREN/shirts/t_shirt_benetton_grey.jpg"></a>
  				</div>
  				<div class="column">
					  <p><? echo $women[6]['description']; ?></p>
					  <p><a href="#"><img class="pic" src=<? echo $women[6]['img']; ?>></a></p>
  				</div>
  				<div class="column">
					  <p><? echo $children[6]['description']; ?></p>
					  <p><a href="#"><img class="pic" src=<? echo $children[6]['img']; ?>></a></p>
  				</div>
			</div>
		</div>
	</body>
	<footer>
		<hr/>
		<p>© ilarbi & sluetzen 2019</p>
	</footer>
</html>