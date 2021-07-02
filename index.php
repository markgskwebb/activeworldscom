<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
<?php include('includes.php'); ?>
</head>
<body>
<?php include('header.php'); ?>

<div style="position: absolute; top: 300px; left: 30px; font-weight: 300; font-size: 4em; color: #FFF;"></div>

<div class="container-fluid" style="margin-top: 390px;">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
		<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#welcome" aria-controls="welcome" role="tab" data-toggle="tab">Welcome</a></li>
    <li role="presentation" class="hide"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">What's New</a></li>
    <li role="presentation" class=""><a href="#recommended" aria-controls="recommended" role="tab" data-toggle="tab">Recommended</a></li>
    <li role="presentation" class=""><a href="#ebts" aria-controls="ebts" role="tab" data-toggle="tab">EBTS 6</a></li>
    <li role="presentation" class=""><a href="#myaw" aria-controls="myaw" role="tab" data-toggle="tab">MyAW</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active fade in" id="welcome">
		<div class="container-fluid text-center" style="color: #FFF; background: #4CAF50 no-repeat center; background-size: cover; padding: 140px 150px 150px 150px;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1 class="text-center ts">Welcome to ActiveWorlds, a sandbox platform for creating anything you can think of, inside a universe with hundreds of worlds, millions of objects, and a dedicated and friendly community.</h1>
			</div>
		</div>

		<div class="container-fluid text-center" style="color: #FFF; background: #2196F3 no-repeat top; background-size: cover; padding: 50px; margin-top: 20px;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1 class="text-center nomargin ts" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.4);">Start Dreaming Big</h1>
					<h4 class="text-center ts" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.4);">If you'd like to give ActiveWorlds a try, click below to download it for free.</h4>
			
					<!-- Start Tile -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 75px; margin-bottom: 25px;">
					<a href="<?php echo $GLOBALS['names']['windl']; ?>" style="color: #FFF;"><i class="fa fa-fw fa-5x fa-windows"></i><br /><br /><span>Download for Windows</span></a>
				</div>
					<!-- End Tile -->
			
					<!-- Start Tile -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 75px; margin-bottom: 25px;">
					<a href="<?php echo $GLOBALS['names']['macdl']; ?>" style="color: #FFF;"><i class="fa fa-fw fa-5x fa-apple"></i><br /><br /><span>Download for OS X</span></a>
				</div>
					<!-- End Tile -->
			
					<!-- Start Tile -->
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hide" style="margin-top: 75px; margin-bottom: 25px;">
					<a href="<?php echo $GLOBALS['names']['linuxdl']; ?>" style="color: #FFF;"><i class="fa fa-fw fa-5x fa-linux"></i><br /><br /><span>Download for Linux</span></a>
				</div>
					<!-- End Tile -->
			
					<!-- Start Tile -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 75px; margin-bottom: 25px;">
					<a href="downloads.php" style="color: #FFF;"><i class="fa fa-fw fa-5x fa-download"></i><br /><br /><span>More Downloads</span></a>
				</div>
					<!-- End Tile -->
			</div>
		</div>
	</div>
    <div role="tabpanel" class="tab-pane fade hide" id="new">
	</div>
    <div role="tabpanel" class="tab-pane fade" id="recommended">
		<!-- Start Tile Generation B -->
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0; margin-bottom: 8px;">
				<div style="height: 350px; background-size: cover; background: #111 url(img/npano/ct/swcity.jpg) no-repeat center; width: 100%;">
					<div class="panel-fade">
						
						<div style="position: absolute; top: 15px; left: 20px; color: #FFF; font-size: 14px; padding-bottom: 5px; width: 90%;"> <!-- Tile Location -->
							<i class="md-place fa-fw"></i> AW 2217s 3609e 0a 90
						</div>
						
						<div style="position: absolute; top: 35px; left: 20px; color: #FFF; font-size: 14px; padding-bottom: 5px; width: 90%;" class="hide"> <!-- Tile Rating -->
							<i class="md-security fa-fw"></i> Rated PG
						</div>
						
						<div style="position: absolute; bottom: 27px; left: 20px; color: #FFF; font-size: 18px; padding-bottom: 5px; width: 90%;"> <!-- Tile Name -->
							SW City
						</div>
						
						<div style="position: absolute; bottom: 7px; left: 20px; color: #DDD; font-size: 14px; padding-bottom: 5px;"> <!-- Tile Author -->
							SW City Productions
						</div>
						
						<div style="position: absolute; bottom: 10px; right: 15px; color: #FFF; font-size: 18px; width: 90%; text-align: right;"> <!-- Tile Options -->
							<div class="btn-group dropup">
								<a class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">OPTIONS</a>
								
								<ul class="dropdown-menu pull-right animated-q zoomInSlight2" role="menu">
									<li><a href="javascript:popUp('http://pano.aw3du.com/?img=<?php echo $GLOBALS['names']['domain']; ?>img/npano/ct/swcity.jpg&autoload=yes&fov=90')">Panoramic</a></li>
									<li class="hide"><a href="https://youtube.com/embed/6pgaJ-c44Ak?autoplay=1" data-fancybox-type="iframe" class="frame2">Video</a></li>
									<li class="hide"><a href="http://swcity.net" target="_blank">Website</a></li>
									<li class="hide"><a href="http://wiki.activeworlds.com/index.php?title=SW_City" target="_blank">Wiki</a></li>
										<li class="divider hide"></li>
									<li class="hide"><a href="#" target="_blank">Placeholder A</a></li>
									<li class="hide"><a href="#" target="_blank">Placeholder B</a></li>
									<li class="hide"><a href="#" target="_blank">Placeholder C</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- End Tile Generation B -->
		<!-- Start Tile Generation B -->
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0; margin-bottom: 8px;">
				<div style="height: 350px; background-size: cover; background: #111 url(img/npano/attr/airspeed.jpg) no-repeat center; width: 100%;">
					<div class="panel-fade">
						
						<div style="position: absolute; top: 15px; left: 20px; color: #FFF; font-size: 14px; padding-bottom: 5px; width: 90%;"> <!-- Tile Location -->
							<i class="md-place fa-fw"></i> AW 2417.74S 3444.94E 22.70a 263
						</div>
						
						<div style="position: absolute; top: 35px; left: 20px; color: #FFF; font-size: 14px; padding-bottom: 5px; width: 90%;" class="hide"> <!-- Tile Rating -->
							<i class="md-security fa-fw"></i> Rated PG
						</div>
						
						<div style="position: absolute; bottom: 27px; left: 20px; color: #FFF; font-size: 18px; padding-bottom: 5px; width: 90%;"> <!-- Tile Name -->
							AirSpeed
						</div>
						
						<div style="position: absolute; bottom: 7px; left: 20px; color: #DDD; font-size: 14px; padding-bottom: 5px;"> <!-- Tile Author -->
							SW City Productions
						</div>
						
						<div style="position: absolute; bottom: 10px; right: 15px; color: #FFF; font-size: 18px; width: 90%; text-align: right;"> <!-- Tile Options -->
							<div class="btn-group dropup">
								<a class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">OPTIONS</a>
								
								<ul class="dropdown-menu pull-right animated-q zoomInSlight2" role="menu">
									<li><a href="javascript:popUp('http://pano.aw3du.com/?img=<?php echo $GLOBALS['names']['domain']; ?>img/npano/attr/airspeed.jpg&autoload=yes&fov=90')">Panoramic</a></li>
									<li class=""><a href="https://youtube.com/embed/ht2SGJDKxDs?autoplay=1" data-fancybox-type="iframe" class="frame2">Video</a></li>
									<li class=""><a href="http://swcity.net/users/chris/airspeed/" target="_blank">Website</a></li>
									<li class="hide"><a href="http://wiki.activeworlds.com/index.php?title=SW_City" target="_blank">Wiki</a></li>
										<li class="divider hide"></li>
									<li class="hide"><a href="#" target="_blank">Placeholder A</a></li>
									<li class="hide"><a href="#" target="_blank">Placeholder B</a></li>
									<li class="hide"><a href="#" target="_blank">Placeholder C</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- End Tile Generation B -->
		<!-- Start Tile Generation B -->
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0; margin-bottom: 8px;">
				<div style="height: 350px; background-size: cover; background: #111 url(img/npano/attr/rockcoaster.jpg) no-repeat center; width: 100%;">
					<div class="panel-fade">
						
						<div style="position: absolute; top: 15px; left: 20px; color: #FFF; font-size: 14px; padding-bottom: 5px; width: 90%;"> <!-- Tile Location -->
							<i class="md-place fa-fw"></i> America 499.75N 483.75W 0.25a 230
						</div>
						
						<div style="position: absolute; top: 35px; left: 20px; color: #FFF; font-size: 14px; padding-bottom: 5px; width: 90%;" class=""> <!-- Tile Rating -->
							<i class="md-star fa-fw"></i> EBTS 5 Second Place Winner
						</div>
						
						<div style="position: absolute; bottom: 27px; left: 20px; color: #FFF; font-size: 18px; padding-bottom: 5px; width: 90%;"> <!-- Tile Name -->
							Rock-N-Rollercoaster
						</div>
						
						<div style="position: absolute; bottom: 7px; left: 20px; color: #DDD; font-size: 14px; padding-bottom: 5px;"> <!-- Tile Author -->
							OzySEO
						</div>
						
						<div style="position: absolute; bottom: 10px; right: 15px; color: #FFF; font-size: 18px; width: 90%; text-align: right;"> <!-- Tile Options -->
							<div class="btn-group dropup">
								<a class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">OPTIONS</a>
								
								<ul class="dropdown-menu pull-right animated-q zoomInSlight2" role="menu">
									<li><a href="javascript:popUp('http://pano.aw3du.com/?img=<?php echo $GLOBALS['names']['domain']; ?>img/npano/attr/rockcoaster.jpg&autoload=yes&fov=90')">Panoramic</a></li>
									<li class="hide"><a href="https://youtube.com/embed/ht2SGJDKxDs?autoplay=1" data-fancybox-type="iframe" class="frame2">Video</a></li>
									<li class="hide"><a href="http://swcity.net/users/chris/airspeed/" target="_blank">Website</a></li>
									<li class="hide"><a href="http://wiki.activeworlds.com/index.php?title=SW_City" target="_blank">Wiki</a></li>
										<li class="divider hide"></li>
									<li class="hide"><a href="#" target="_blank">Placeholder A</a></li>
									<li class="hide"><a href="#" target="_blank">Placeholder B</a></li>
									<li class="hide"><a href="#" target="_blank">Placeholder C</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- End Tile Generation B -->
		<!-- Start Tile Generation B -->
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0; margin-bottom: 8px;">
				<div style="height: 350px; background-size: cover; background: #111 url(img/npano/attr/minetrain.jpg) no-repeat center; width: 100%;">
					<div class="panel-fade">
						
						<div style="position: absolute; top: 15px; left: 20px; color: #FFF; font-size: 14px; padding-bottom: 5px; width: 90%;"> <!-- Tile Location -->
							<i class="md-place fa-fw"></i> America 411.75N 483.75W 1.0a 230
						</div>
						
						<div style="position: absolute; top: 35px; left: 20px; color: #FFF; font-size: 14px; padding-bottom: 5px; width: 90%;" class=""> <!-- Tile Rating -->
							<i class="md-star fa-fw"></i> EBTS 5 First Place Winner
						</div>
						
						<div style="position: absolute; bottom: 27px; left: 20px; color: #FFF; font-size: 18px; padding-bottom: 5px; width: 90%;"> <!-- Tile Name -->
							Seven Dwarfs Mine Train
						</div>
						
						<div style="position: absolute; bottom: 7px; left: 20px; color: #DDD; font-size: 14px; padding-bottom: 5px;"> <!-- Tile Author -->
							James.
						</div>
						
						<div style="position: absolute; bottom: 10px; right: 15px; color: #FFF; font-size: 18px; width: 90%; text-align: right;"> <!-- Tile Options -->
							<div class="btn-group dropup">
								<a class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">OPTIONS</a>
								
								<ul class="dropdown-menu pull-right animated-q zoomInSlight2" role="menu">
									<li><a href="javascript:popUp('http://pano.aw3du.com/?img=<?php echo $GLOBALS['names']['domain']; ?>img/npano/attr/minetrain.jpg&autoload=yes&fov=90')">Panoramic</a></li>
									<li class="hide"><a href="https://youtube.com/embed/ht2SGJDKxDs?autoplay=1" data-fancybox-type="iframe" class="frame2">Video</a></li>
									<li class="hide"><a href="http://swcity.net/users/chris/airspeed/" target="_blank">Website</a></li>
									<li class="hide"><a href="http://wiki.activeworlds.com/index.php?title=SW_City" target="_blank">Wiki</a></li>
										<li class="divider hide"></li>
									<li class="hide"><a href="#" target="_blank">Placeholder A</a></li>
									<li class="hide"><a href="#" target="_blank">Placeholder B</a></li>
									<li class="hide"><a href="#" target="_blank">Placeholder C</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- End Tile Generation B -->
	</div>
    <div role="tabpanel" class="tab-pane fade" id="ebts">
		<div class="container-fluid text-center" style="color: #FFF; background: #FFF url(img/feat/ebts6.jpg) no-repeat center; background-size: cover; padding: 50px;">
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 text-center">
					<h1 class="text-center nomargin"><img src="img/ebts6.png" height="250" class="ishadow" style="margin-bottom: 50px; margin-top: 20px;" /></h1>
							<br /><br />
					<h2 class="text-center ts" style="line-height: 130%;">Congratulations to the winners!<br />See the entries at AW 7500s 500e</h2>
					
					<h3 class="text-center ts" style="line-height: 130%; margin-top: 50px;">First Place</h3>
					<h1 class="text-center ts" style="line-height: 130%; margin-top: -15px;">Lensman</h1>
					
					<h3 class="text-center ts" style="line-height: 130%; margin-top: 50px;">Second Place</h3>
					<h1 class="text-center ts" style="line-height: 130%; margin-top: -15px;">stanly</h1>
					
					<h3 class="text-center ts" style="line-height: 130%; margin-top: 50px;">Third Place</h3>
					<h1 class="text-center ts" style="line-height: 130%; margin-top: -15px;">OklahomaTraveler</h1>
			</div>
		</div>
	</div>
    <div role="tabpanel" class="tab-pane fade" id="myaw">
		<div class="container-fluid text-center" style="color: #FFF; background: #222 no-repeat center; background-size: cover; padding: 50px;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img src="img/myaw.png" class="text-center ishadow" />
					<h1 class="text-center ts" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.4);">Launching Fall 2015</h1>
					<a href="myaw.php" class="btn btn-primary btn-lg" style="margin-top: 10px;">Learn More</a>
			</div>
		</div>
	</div>
  </div>

</div>

<?php include('toast.php'); ?>

</div>
</div>
<?php include('footer.php'); ?>
<?php include('js.php'); ?>
</body>
</html>