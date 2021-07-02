<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
<?php include('includes.php'); ?>
</head>
<body>
<?php include('header.php'); ?>

<div style="position: absolute; top: 300px; left: 30px; font-weight: 300; font-size: 4em; color: #FFF;" class="hide">Welcome to ActiveWorlds.com</div>

<div class="container-fluid" style="margin-top: 450px;">

	<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">

<div class="container-fluid text-center" style="color: #FFF; background: #111 url(<?php print(randomFile("img/index")); ?>) no-repeat center; background-size: cover; padding: 150px; margin-top: 20px;">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h1 class="text-center">Welcome to ActiveWorlds, a sandbox platform for creating anything you can think of, inside a universe with hundreds of worlds, millions of objects, and a dedicated and friendly community.</h1>
	</div>
</div>

<div class="container-fluid text-center" style="color: #FFF; background: #2196F3 no-repeat top; background-size: cover; padding: 50px; margin-top: 20px;">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1 class="text-center nomargin ts" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.4);">Start Dreaming Big</h1>
			<h4 class="text-center ts" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.4);">If you'd like to give ActiveWorlds a try, click below to download it for free.</h4>
	
			<!-- Start Tile -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-top: 75px; margin-bottom: 25px;">
			<a href="<?php echo $GLOBALS['names']['windl']; ?>" style="color: #FFF;"><i class="fa fa-fw fa-5x fa-windows"></i><br /><br /><span>Download for Windows</span></a>
		</div>
			<!-- End Tile -->
	
			<!-- Start Tile -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-top: 75px; margin-bottom: 25px;">
			<a href="<?php echo $GLOBALS['names']['macdl']; ?>" style="color: #FFF;"><i class="fa fa-fw fa-5x fa-apple"></i><br /><br /><span>Download for OS X</span></a>
		</div>
			<!-- End Tile -->
	
			<!-- Start Tile -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-top: 75px; margin-bottom: 25px;">
			<a href="<?php echo $GLOBALS['names']['linuxdl']; ?>" style="color: #FFF;"><i class="fa fa-fw fa-5x fa-linux"></i><br /><br /><span>Download for Linux</span></a>
		</div>
			<!-- End Tile -->
	
			<!-- Start Tile -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-top: 75px; margin-bottom: 25px;">
			<a href="downloads.php" style="color: #FFF;"><i class="fa fa-fw fa-5x fa-download"></i><br /><br /><span>More Downloads</span></a>
		</div>
			<!-- End Tile -->
	</div>
</div>

<div class="container-fluid text-center" style="color: #FFF; background: #FFF url(img/feat/ebts6.jpg) no-repeat center; background-size: cover; padding: 50px; margin-top: 20px;">
	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 text-center">
			<h1 class="text-center nomargin"><img src="img/ebts6.png" height="250" style="margin-bottom: 50px; margin-top: 20px;" /></h1>
			<h4 class="text-center hide" style="line-height: 130%;">Kicking off the 20th Anniversary of ActiveWorlds is the Extreme Builders Talent Show 6.</h4>
					<br /><br />
			<h2 class="text-center ts" style="line-height: 130%;">Open from February 1 through March 29<br />Located at AW 7500s 500e</h2>
	</div>
</div>

<div class="container-fluid text-center hide" style="color: #FFF; background: #4CAF50 no-repeat top; background-size: cover; padding: 50px; margin-top: 20px;">
	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 text-center">
			<h1 class="text-center nomargin" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.4);">Connect with the Community</h1>
			<h4 class="text-center"></h4>
	
			<!-- Start Tile -->
		<a href="http://facebook.com/activeworlds3d" style="color: #4CAF50;">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-top: 75px; margin-bottom: 25px; background: #FFF; padding: 30px; border-right: 30px solid #4CAF50;">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<i class="fa fa-5x fa-facebook-square"></i>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-left">
					<span>The official Page for the ActiveWorlds Universe.</span>
				</div>
			</div>
		</a>
			<!-- End Tile -->
	
			<!-- Start Tile -->
		<a href="myaw.php" style="color: #4CAF50;">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-top: 75px; margin-bottom: 25px; background: #FFF; padding: 30px; border-right: 30px solid #4CAF50;">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<i class="fa fa-5x fa-lock"></i>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-left">
					<span>Private sharing exclusively for ActiveWorlds citizens with MyAW*</span>
				</div>
			</div>
		</a>
			<!-- End Tile -->
			
			<h6 class="text-left">* currently requires an invitation-only account.</h6>
	</div>
</div>

</div>
</div>
<?php include('footer.php'); ?>
<?php include('js.php'); ?>
</body>
</html>