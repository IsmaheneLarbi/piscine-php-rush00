<!DOCTYPE html>
<html>

<head>
	<title>WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php require_once 'header.php';  ?>
	<br>
	<div id="centerbasket">
		<div class="basket">
			<div class="rowbasket">
				<div class="columnbasket">
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
			<div class="rowbasket">
				<div class="columnbasket">
					<a href="#"><img class="pic" src="img/MEN/bottoms/trouser_yourturn_grey.jpg"></a>
					<p>description</p>
				</div>
			</div>
			<div class="rowbasket">
				<div class="columnbasket">
					<a href="#"><img class="pic" src="img/CHILDREN/shirts/t_shirt_lacoste_white.jpg"></a>
					<p>description</p>
				</div>
			</div>
			<div class="rowbasket">
				<div class="columnbasket">
					<a href="#"><img class="pic" src="img/CHILDREN/shirts/t_shirt_benetton_grey.jpg"></a>
					<p>description</p>
				</div>
				<!--<div class="columnbasket">
	    				  <p><a href="#"><img src="picture"></a></p>
		    			  <p>description</p>
  			    	</div>
    				<div class="columnbasket">
	    				  <p><a href="#"><img src="picture"></a></p>
		    			  <p>description</p>
  			    	</div>-->
			</div>
		</div>
		<div class="info">
			<div class="col-25">
				<div class="container">
					<h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
					<p><a href="#">Product 1</a> <span class="price">$15</span></p>
					<p><a href="#">Product 2</a> <span class="price">$5</span></p>
					<p><a href="#">Product 3</a> <span class="price">$8</span></p>
					<p><a href="#">Product 4</a> <span class="price">$2</span></p>
					<hr>
					<p>Total <span class="price" style="color:black"><b>$30</b></span></p>
					<input type="submit" value="Checkout" class="checkout">
				</div>
			</div>
		</div>
	</div>
</body>
<?php require_once 'footer.php';  ?>

</html>