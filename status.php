<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
<?php include('includes.php'); ?>
</head>
<body>
<?php include('header.php'); ?>

<div class="container-fluid animated-half fadeIn sn0d nots" style="margin-top: 700px; margin-bottom: -3px; z-index: 9999;">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left" style="background: #0091EA; height: 100px; padding-top: 23px; border-left: 10px solid #FFF; border-top: 10px solid #FFF;">
		<span style="color: #FFF; font-size: 32px; font-weight: 400; margin-left: 10px;">Server Status</span>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hidden-sm hidden-xs text-right" style="background: #0091EA; height: 100px; padding-top: 26px; border-right: 10px solid #FFF; border-top: 10px solid #FFF;">
		<div class="btn-group dropup" style="margin-right: 15px;">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="border: none; box-shadow: none;">
				OPTIONS
			</button>
			<ul class="dropdown-menu pull-right animated-half fadeInUp zdepth1" role="menu" style="width: 300px;">
				<li class="animated-half fadeInUp sn0c"><a href="http://web.awcom.me/feedback">Community Feedback <i class="md md-thumb-up fa-fw pull-right"></i></a></li>
				<li class="animated-half fadeInUp sn0b"><a href="https://www.activeworlds.com/ssl/forms/view.php?id=16037">Request Support <i class="md md-warning fa-fw pull-right"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="container-fluid noanimated-half fadeIn sn0c" style="margin-top: 200px;">
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-center" style="background: #FFF; padding-top: 30px; padding-bottom: 35px;">
			
			<div class="alert alert-info text-left">This page provides status updates for the community universe. It does not provide updates for other ActiveWorlds products and services. In some rare cases, it may not reflect the current status of the community universe.</div>
			
			<div class="hide"><iframe src="https://activeworlds.a.offsitestatus.com/widget" frameborder="0" height="125" width="500" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe></div>
			<iframe src="https://activeworlds.a.offsitestatus.com/" frameborder="0" height="700" width="90%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true" style="border-radius: 10px;"></iframe>
	</div>
</div>
<div style="width: 100%; height: 290px; margin-top: 75px; display: none; background: #000 url(img/npano/awi/alpha.jpg) no-repeat center; background-size: cover; text-align: center;">
	<div style="width: 100%; height: 290px; background: rgba(0,0,0,0) no-repeat center; background-size: 150%; text-align: center;">
	</div>
</div>
<div style="position: relative; width: 100%; height: 100px; z-index: 1; display: none;" class="callout-green container-fluid">
	<div class="col-lg-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12">
		<span style="font-weight: 300; font-size: 48px;">Home of the 3D Internet since 1995</span>
	</div>
</div>
<?php include('footer.php'); ?>
<?php include('js.php'); ?>
</body>
</html>