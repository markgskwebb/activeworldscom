<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
<?php include('includes.php'); ?>
</head>
<body>

<?php
/**
 * Randomly chooses a file from the given directory.
 * @param directory The directory to search.
 * @param ext Optional. An array of accepted file extensions to match.
 * @return A string representing the name of the file
 */
function randomFile($directory, $ext = array("jpg", "jpeg", "gif", "png", "bmp")) {
	// Find file matches using glob
	// NOTE: Only returns files whose extensions are in $ext
	$files = glob($directory."/*.{".implode(",",$ext)."}", GLOB_BRACE);
 
	// Randomly choose a file
	$rand = mt_rand(0, count($files) - 1);
	$file = $files[$rand];
	return $file;
}
?>
<div style="width: 100%; position: absolute; top: 0px; left: 0; height: 50px; background: #37474F; border-bottom: 1px solid #37474F;" class="zdepth1">
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hide"><?php include('nav.php'); ?></div>
	</div>
</div>
<div class="zdepth1 animated-half fadeInUp sn0b" style="width: 100%; height: 100vh; position: absolute; top: 0; left: 0; background: #111 url(<?php print(randomFile("img/npano/index")); ?>) no-repeat center; background-size: cover; z-index: -2;"></div>
<div class="" style="width: 100%; height: 100vh; position: absolute; top: 0; left: 0; background: #111 no-repeat center; background-size: cover; z-index: -3;"></div>
<div class="headersearch">
	<div class="container-fluid">
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" style="height: 65px;">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left"><a href="./"><img src="img/awilogo2.png" height="64" class="ishadow" /></a><a href="20.php" class=""><img src="img/20/logo_wide.png" height="70" style="margin-top: 13px; margin-left: 10px;" class="ishadow" /></a></div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 animated-half fadeInUp sn1 hide"><gcse:search></gcse:search></div>
		</div>
	</div>
	<div class="container-fluid hide">
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" style="height: 65px;">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 animated-half fadeInUp sn0h"><a href="./"><img src="img/20/aw20.png" height="35" class="ishadow" /></a></div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 animated-half fadeInUp sn1"><gcse:search></gcse:search></div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 animated-half fadeInUp sn0a text-right hide"><i class="md-account-circle" style="color: #FFF; font-size: 64px;"></i></div>
		</div>
	</div>
</div>
<!-- <div style="width: 100%; position: absolute; top: 245px; left: 0; height: 50px; background: url(img/npano/awi/alphasnow.jpg) no-repeat center; background-size: 0%;" data-adaptive-background="1" data-ab-css-background="1">
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
	</div>
</div> -->
<?php include('toast.php'); ?>

<div class="container-fluid animated-half fadeIn sn0d nots" style="margin-top: 700px; margin-bottom: -3px; z-index: 9999;">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left" style="background: #0091EA; height: 100px; padding-top: 23px; border-left: 10px solid #FFF; border-top: 10px solid #FFF;">
		<span style="color: #FFF; font-size: 32px; font-weight: 400; margin-left: 10px;"></span>
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
	
		<p>The ActiveWorlds.com website is currently unavailable. We apologize for the inconvenience.<br />In the meantime, you can still download software and view universe status information.</p><br />
		<a class="btn btn-lg btn-primary" style="border: none; border-radius: 0;" href="<?php echo $GLOBALS['names']['windl']; ?>"><i class="fa fa-fw fa-4x fa-windows"></i><br /><br /><span>Windows</span></a>
		<a class="btn btn-lg btn-primary" style="border: none; border-radius: 0;" href="<?php echo $GLOBALS['names']['macdl']; ?>"><i class="fa fa-fw fa-4x fa-apple"></i><br /><br /><span>OS X</span></a>
		<a class="btn btn-lg btn-primary" style="border: none; border-radius: 0;" href="<?php echo $GLOBALS['names']['linuxdl']; ?>"><i class="fa fa-fw fa-4x fa-linux"></i><br /><br /><span>Linux</span></a><br /><br />
        <a class="btn btn-lg btn-primary" style="border: none; border-radius: 0;" href="https://www.activeworlds.com/apps/ActiveWorldsWorldServer.exe"><i class="fa fa-fw fa-4x fa-windows"></i><br /><br /><span>x86 World Server</span></a>
        <a class="btn btn-lg btn-primary" style="border: none; border-radius: 0;" href="https://www.activeworlds.com/apps/ActiveWorldsWorldServer64bit.exe"><i class="fa fa-fw fa-4x fa-windows"></i><br /><br /><span>x64 World Server</span></a>
        <a class="btn btn-lg btn-primary" style="border: none; border-radius: 0;" href="https://www.activeworlds.com/apps/admin113.zip"><i class="fa fa-fw fa-4x fa-windows"></i><br /><br /><span>World Server Admin Tool</span></a>
		<a class="btn btn-lg btn-primary" style="border: none; border-radius: 0;" href="https://www.activeworlds.com/apps/awslnx142.nolib.tar.gz"><i class="fa fa-fw fa-4x fa-linux"></i><br /><br /><span>Linux World Server</span></a>
        <a class="btn btn-lg btn-primary" style="border: none; border-radius: 0;" href="https://www.activeworlds.com/apps/voip4.0.0.23.zip"><i class="fa fa-fw fa-4x fa-volume-up"></i><br /><br /><span>VoIP Plugin</span></a>
			<iframe src="https://activeworlds.a.offsitestatus.com/" frameborder="0" height="700" width="90%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true" style="border-radius: 10px; margin-top: 20px;"></iframe>
	</div>
</div>

<?php include('js.php'); ?>

</body>
</html>