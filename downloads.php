<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
<?php include('includes.php'); ?>
</head>
<body>
<?php include('header.php'); ?>

<div style="position: absolute; top: 300px; left: 30px; font-weight: 300; font-size: 4em; color: #FFF;">Downloads</div>

<div class="container-fluid" style="margin-top: 450px;">

	<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
	
			<div class="alert alert-info">Looking for the World Starter Kit? <a href="starterkit.php" class="alert-link">Click here!</a></div>
			
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<!-- PRICE ITEM -->
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h4 class="text-center">
											<i class="fa fa-fw fa-windows"></i> Windows
										</h4>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item">Windows® XP SP3 or newer</li>
										<li class="list-group-item">Windows Experience Index 5.5 or better</li>
										<li class="list-group-item">Pentium® Dual Core™ CPU 2 GHz or better</li>
										<li class="list-group-item">2 GB system memory</li>
										<li class="list-group-item">DirectX® 9.0c or newer</li>
										<li class="list-group-item">Hardware accelerated 3D graphics (minimum 128MB dedicated memory with latest drivers)</li>
										<li class="list-group-item">Broadband Internet connection</li>
									</ul>
									<div class="panel-footer">
										<a class="btn btn-lg btn-block btn-primary" href="<?php echo $GLOBALS['names']['windl']; ?>">DOWNLOAD</a>
									</div>
								</div>
								<!-- /PRICE ITEM -->
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" rel="tooltip">
								<!-- PRICE ITEM -->
								<div class="panel panel-danger">
									<div class="panel-heading">
										<h4 class="text-center">
											<i class="fa fa-fw fa-apple"></i> OS X
										</h4>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item">Mac OS X® 10.6 Snow Leopard or later</li>
										<li class="list-group-item">Intel® Core™ i5 or better</li>
										<li class="list-group-item">4 GB system memory</li>
										<li class="list-group-item">NVIDIA® GeForce® 320M, ATI Radeon™ HD 6630M, Intel® HD 3000 or better</li>
										<li class="list-group-item">5 GB available HDD space</li>
										<li class="list-group-item">Keyboard and mouse or touchpad</li>
										<li class="list-group-item">Broadband Internet connection</li>
									</ul>
									<div class="panel-footer">
										<a class="btn btn-lg btn-block btn-danger" href="<?php echo $GLOBALS['names']['macdl']; ?>">DOWNLOAD</a>
									</div>
								</div>
								<!-- /PRICE ITEM -->
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<!-- PRICE ITEM -->
								<div class="panel panel-warning">
									<div class="panel-heading">
										<h4 class="text-center">
											<i class="fa fa-fw fa-linux"></i> Linux
										</h4>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item">Pentium® Dual Core™ CPU 2 GHz or better</li>
										<li class="list-group-item">2 GB system memory</li>
										<li class="list-group-item">Hardware accelerated 3D graphics (minimum 128MB dedicated memory with latest drivers)</li>
									</ul>
									<div class="panel-footer">
										<a class="btn btn-lg btn-block btn-warning" href="<?php echo $GLOBALS['names']['linuxdl']; ?>">SETUP INSTRUCTIONS</a>
									</div>
								</div>
								<!-- /PRICE ITEM -->
							</div>
						</div>
						<div class="row text-center" style="margin-top: 100px;">
												<h2>World Server Downloads</h2>
											<a class="btn btn-lg btn-primary" href="https://www.activeworlds.com/apps/ActiveWorldsWorldServer.exe" rel="tooltip" title="For 32-bit computers">x86 World Server</a>&nbsp;
											<a class="btn btn-lg btn-primary" href="https://www.activeworlds.com/apps/ActiveWorldsWorldServer64bit.exe" rel="tooltip" title="For 64-bit computers">x64 World Server</a>&nbsp;
											<a class="btn btn-lg btn-primary" href="https://www.activeworlds.com/apps/awslnx142.nolib.tar.gz" rel="tooltip" title="For Linux">Linux World Server</a>&nbsp;
											<a class="btn btn-lg btn-primary" href="https://www.activeworlds.com/apps/admin113.zip" rel="tooltip" title="For managing world settings">Admin Tool</a>&nbsp;
											<a class="btn btn-lg btn-primary" href="https://activeworlds.com/apps/voip4.0.0.23.zip" rel="tooltip" title="For enabling voice chat features (in worlds that are P-20 or larger)">VoIP Plugin</a>
						</div>
					</div>
					
					
	</div>
</div>
<div style="width: 100%; height: 290px; margin-top: 75px; display: none; background: #09F url(img/bg/ribbon2.jpg) no-repeat center; background-size: cover; text-align: center;">
	<div style="width: 100%; height: 290px; background: rgba(0,128,255,0.4) no-repeat center; background-size: 150%; text-align: center;">
	</div>
</div>
<div style="position: relative; width: 100%; height: 100px; z-index: 1; display: none;" class="callout-blue container-fluid">
	<div class="col-lg-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12">
		<span style="font-weight: 300; font-size: 48px;">Community services are just a click away.</span>
	</div>
</div>
<?php include('footer.php'); ?>
<?php include('js.php'); ?>
</body>
</html>