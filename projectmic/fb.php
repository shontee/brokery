<?php

/*if ($_SERVER['PHP_AUTH_PW'] != "paultan8888" AND $_SERVER['PHP_AUTH_USER'] != "paultan") {
	header('WWW-Authenticate: Basic realm="Paulltan.org"');
	header('HTTP/1.0 401 Unauthorized');
	echo 'This page is restrict area';
	exit;
} */

?>
<html>
	<head>
		<style type="text/css">
		@charset "utf-8";
		* {margin: 0px;padding: 0px;list-style-type: none;}
		body{background-color:white;font-family: "Arial", "微軟正黑體", "細明體";font-size: 13px;color: #7e7e7e;line-height: 18px;}
		 .iframex{border-collapse:collapse;width:100%;height:100%;top:0px;}
		 .ads { position: absolute; z-index: 100; background: #fff;left:0;top:160px;}
		</style>
		<script>
			function op_ads(){
				alert('xxx');
				//window.open("http://www.airasia.com");
			}
		</script>
	</head>
	<body>
		<span class="ads">
			<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="220" HEIGHT="280" id="Yourfilename" ALIGN="">
			<PARAM NAME=movie VALUE="front_images/paultan_ads0929.swf"> 
			<PARAM NAME=quality VALUE=high> 
			<PARAM NAME=bgcolor VALUE=#333399> 
			<EMBED src="front_images/paultan_ads0929.swf" quality=high bgcolor=#333399 WIDTH="220" HEIGHT="280" NAME="paultan" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED> 
			</OBJECT>
		</span>
		<iframe src="http://paultan.org/" class="iframex"></iframe>
	</body>
</html>

