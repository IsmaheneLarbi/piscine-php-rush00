<!DOCTYPE html>
<html>
	<head>
		<title>WEBSITE</title>
		<link rel="stylesheet" type="text/css" href="css/basket.css">
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
                <h1 class="homepage" href="index.php">NAME OF WEBSITE</h1>
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
		<br>
		<div id="center">
            <div class="basket">
			    <div class="row">
		    		<div class="column">
		    			<a href="#"><img class="pic" src="img/WOMEN/shirts/blouse_sanna_blue.jpg"></a>
                        <div class="description">
                            <p id="test">description</p>
                            <p>Price: </p>
                            <form>
                                <select id="size" name="size">
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                </select>
                            </form>
                        </div>
                   </div>
                </div>
                <div class="row">
  			    	<div class="column">
			    		<a href="#"><img class="pic" src="img/MEN/bottoms/trouser_yourturn_grey.jpg"></a>
			    		<p>description</p>
                 </div>
              </div>
                <div class="row">
  		    		<div class="column">
			    		<a href="#"><img class="pic" src="img/CHILDREN/shirts/t_shirt_lacoste_white.jpg"></a>
				    	<p>description</p>
  		    		</div>
    			</div>
	    		<div class="row">
		    		<div class="column">
			    		<a href="#"><img class="pic" src="img/CHILDREN/shirts/t_shirt_benetton_grey.jpg"></a>
			    		<p>description</p>
  			    	</div>
    				<!--<div class="column">
	    				  <p><a href="#"><img src="picture"></a></p>
		    			  <p>description</p>
  			    	</div>
    				<div class="column">
	    				  <p><a href="#"><img src="picture"></a></p>
		    			  <p>description</p>
  			    	</div>-->
                </div>
            </div>
            <div class="info">
                <p>lalalalala</p>
                <br>
                <p>Amount of items</p>
            </div>
		</div>
	</body>
	<footer>
		<hr/>
		<p>© ilarbi & sluetzen 2019</p>
	</footer>
</html>