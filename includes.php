<?php


	if (!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'off'))
	{
		if (empty($_SERVER['QUERY_STRING']))
			header('Location: https://www.activeworlds.com'.$_SERVER['ORIG_PATH_INFO']);
		else
			header('Location: https://www.activeworlds.com'.$_SERVER['ORIG_PATH_INFO']."?".$_SERVER['QUERY_STRING']);
		exit;
	}

////////////////////////////////////
/// Advised: CHMOD 750 names.php ///
////////////////////////////////////
$GLOBALS['names'] = array(

// AWI
'aw'=>'ActiveWorlds', // Name of the software
'windl'=>'https://www.activeworlds.com/apps/AWWebInstaller.exe', // Browser download link for Windows
'macdl'=>'https://www.activeworlds.com/apps/Mac/AW3DMacInstaller.pkg', // Browser download link for OS X
'linuxdl'=>'http://wiki.activeworlds.com/index.php?title=Ubuntu', // Browser download link for Linux
'domain'=>'https://www.activeworlds.com/web/', // Root domain
// AWI

// AWI
'btnslot1'=>'<a target="_blank" href="http://web.awcom.me/nominate" class="awissl btn btn-success hide" rel="tooltip" title="Nominate"><i class="fa fa-check"></i></a> <!-- Nominate -->', // Button Slot 1
// AWI

);

?>