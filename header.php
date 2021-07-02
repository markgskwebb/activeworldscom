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
<div style="position: absolute; top: 0px; left: 0; width: 100%; height: 400px; background: #111 url(<?php print(randomFile("img/index")); ?>) no-repeat center; background-size: cover; z-index: -5;"></div>
<div style="position: absolute; top: 0px; left: 0; width: 100%; height: 400px; z-index: -3;" class="panel-fade"></div>
<div style="position: absolute; top: 50px; right: 10px; width: 100%; z-index: 13;"><?php include('nav.php'); ?></div>
<a href="./"><div style="position: absolute; top: 30px; left: 30px; width: 189px; height: 40px; background: url(img/awilogo.png) no-repeat left center; background-size: contain; z-index: 200;">
</div></a>

<div style="position: absolute; top: 365px; right: 50px; border-radius: 50%; height: 70px; width: 70px; background: #FF5252; z-index: 10; color: #FFF; text-align: center;" class="zdepth0b btn-group dropup hidden-sm hidden-xs">
	<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href=""><i class="md-live-help" style="font-size: 44px; color: #FFF; position: absolute; top: 11px; left: 11px; text-align: center;"></i></a>
	<ul class="dropdown-menu pull-right" role="menu" style="margin-top: 10px; background: none; box-shadow: none;">
		<li class="animated-q zoomInSlight sn0b">
			<a href="http://web.awcom.me/feedback" target="_blank">
				<div style="position: absolute; right: 11px; bottom: 10px; border-radius: 50%; height: 50px; width: 50px; background: #FF5252; z-index: 10; color: #FFF; text-align: right; border: 2px solid #FFF;">
					<i class="md-message" style="font-size: 32px; color: #FFF; position: absolute; top: 8px; left: 8px; text-align: center;"></i>
				</div>
				<div style="position: absolute; right: 80px; bottom: 15px; z-index: 10; color: #FFF; text-align: right;">
					<p>Community Feedback</p>
				</div>
			</a>
		</li>
		<li class="animated-q zoomInSlight sn0c">
			<a href="https://www.activeworlds.com/ssl/forms/view.php?id=16037" target="_blank">
				<div style="position: absolute; right: 11px; bottom: 100px; border-radius: 50%; height: 50px; width: 50px; background: #FF5252; z-index: 10; color: #FFF; text-align: right; border: 2px solid #FFF;">
					<i class="md-help" style="font-size: 36px; color: #FFF; position: absolute; top: 5px; left: 5px; text-align: center;"></i>
				</div>
				<div style="position: absolute; right: 80px; bottom: 105px; z-index: 10; color: #FFF; text-align: right;">
					<p>Technical Support</p>
				</div>
			</a>
		</li>
	</ul>
</div>

<div style="position: fixed; z-index: 99999999; background: #FFF; width: 100%; height: 100vh; text-align: center; padding-top: 10%; top: 0; left: 0;" class="animated-q2 fadeOut d125 hide">
	<svg class="spinner" width="200px" height="200px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
	   <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
	</svg>
</div>

<?php include('toast.php'); ?>