<?php
$login = false;
if ( !isset($_SERVER['PHP_AUTH_USER']) ) {
	header('WWW-Authenticate: Basic realm="You Shall Not Pass"');
	header('HTTP/1.0 401 Unauthorized');
	exit;
}else {
	if ( $_SERVER['PHP_AUTH_USER'] == 'user111' && $_SERVER['PHP_AUTH_PW'] == 'klcc1234' ) {
		$login =true;
	} else {
		header('Location: index.php');
	}
}


if(!$login){
	exit();
}

?>
<html>
	<head>
		<title>Brokery</title>
		<link href="front_images/_index/adv_en.css" rel="stylesheet" type="text/css" />
<link href="front_images/_index/main_en.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="550" HEIGHT="400" id="Yourfilename" ALIGN="">
			<PARAM NAME=movie VALUE="front_images/listener502.swf"> 
			<PARAM NAME=quality VALUE=high> 
			<PARAM NAME=bgcolor VALUE=#333399> 
		<EMBED src="front_images/listener502.swf" quality=high bgcolor=#333399 WIDTH="550" HEIGHT="400" NAME="Yourfilename" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED> 
		</OBJECT>
	</body>
</html>
