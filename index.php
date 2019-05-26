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
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<?php  require_once 'header.php';  ?>
		<br>
	<div id="center">
			<div class="row">
				<div class="column">
					<p>test<?php  echo $men[0]['description'];?></p>
					<a href="#"><img class="pic" src=<?php  echo $men[0]['img'];?>></a>
  				</div>
  				<div class="column">
					<p><?php  echo $women[0]['description']; ?></p>
					<a href="#"><img class="pic" src=<?php  echo $women[0]['img']?>></a>
  				</div>
  				<div class="column">
					<p><?php echo $children[0]['description']; ?></p>
					<a href="#"><img class="pic" src=<?php echo $children[0]['img'];?>></a>
  				</div>
			</div>
			<div class="row">
				<div class="column">
					<p><?php echo $men[3]['description'];?></p>
					<a href="#"><img class="pic" src=<?php echo $men[3]['img'];?>></a>
  				</div>
  				<div class="column">
					  <p><?php echo $women[3]['description']; ?></p>
					  <p><a href="#"><img class="pic" src=<?php echo $women[3]['img']?>></a></p>
  				</div>
  				<div class="column">
					  <p><?php echo $children[3]['description'];?></p>
					  <p><a href="#"><img class="pic" src=<?php echo $children[3]['img'];?>></a></p>
  				</div>
			</div>
			<div class="row">
				<div class="column">
					<p><?php echo $men[6]['description'];?></p>
					<a href="#"><img class="pic" src= <?php echo $men[6]['img']; ?> ></a>
  				</div>
  				<div class="column">
					  <p><?php echo $women[6]['description']; ?></p>
					  <p><a href="#"><img class="pic" src= <?php echo $women[6]['img']; ?> ></a></p>
  				</div>
  				<div class="column">
					  <p><?php echo $children[6]['description']; ?></p>
					  <p><a href="#"><img class="pic" src=<?php echo $children[6]['img']; ?>></a></p>
  				</div>
			</div>
		</div>
	</body>
	<?php  require_once 'footer.php';  ?>
</html>