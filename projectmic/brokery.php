<?php
session_start();
if($_SESSION['sessionid'] != "hh88hh90"){
	header("Location: logout.php");
}
session_write_close();

?>
<html>
	<head>
		<title>Brokery</title>
		<link href="front_images/_index/adv_en.css" rel="stylesheet" type="text/css" />
<link href="front_images/_index/main_en.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="1060" HEIGHT="760" id="Yourfilename" ALIGN="">
			<PARAM NAME=movie VALUE="front_images/brokery003.swf"> 
			<PARAM NAME=quality VALUE=high> 
			<PARAM NAME=bgcolor VALUE=#333399> 
		<EMBED src="front_images/brokery003.swf" quality=high bgcolor=#333399 WIDTH="1060" HEIGHT="760" NAME="Yourfilename" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED> 
		</OBJECT>
	</body>
</html>