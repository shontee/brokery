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
		<div id="brokery">
		<OBJECT  classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="1060" HEIGHT="760" id="Yourfilename" ALIGN="">
			<PARAM NAME=movie VALUE="front_images/brokery1002.swf"> 
			<PARAM NAME=quality VALUE=high> 
			<PARAM NAME=bgcolor VALUE=#333399> 
		<EMBED src="front_images/brokery1002.swf" quality=high bgcolor=#333399 WIDTH="1060" HEIGHT="760" NAME="Yourfilename" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED> 
		</OBJECT>
		</div>
		<OBJECT id="brokery_header" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="1060" HEIGHT="26" id="Yourfilename" ALIGN="">
			<PARAM NAME=movie VALUE="brokery_header002.swf"> 
			<PARAM NAME=quality VALUE=high> 
			<PARAM NAME=bgcolor VALUE=#333399> 
		<EMBED src="brokery_header002.swf" quality=high bgcolor=#333399 WIDTH="1060" HEIGHT="26" NAME="Yourfilename" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED> 
		</OBJECT>
		<span id="imageload">
			<img id="loadimg" src="" border=0>
		</span>
	</body>
</html>
<script src="http://code.jquery.com/jquery-2.0.1.min.js"></script>
<script language="javascript" defer>
	$(document).ready(function() {
		hide_all();
	});

	function hide_brokery(){
		$('#brokery').css('visibility','hidden');
		$('#brokery').css('height','0');
		$('#brokery').css('width','0');
	}

	function show_brokery(){
		$('#brokery').css('visibility','visible');
		$('#brokery').css('height','1060');
		$('#brokery').css('width','760');
	}

	
	
	function japan(){
		hide_brokery();
		$('#loadimg').attr('src','front_images/japan.jpg');
		$('#imageload').css('display','');
		$('#brokery_header').css('display','');
	}
	function us(){
		hide_brokery();
		$('#loadimg').attr('src','front_images/usd.jpg');
		$('#imageload').css('display','');
		$('#brokery_header').css('display','');
	}
	function euro(){
		hide_brokery();
		$('#loadimg').attr('src','front_images/euro.jpg');
		$('#imageload').css('display','');
		$('#brokery_header').css('display','');
	}
	function uk(){
		hide_brokery();
		$('#loadimg').attr('src','front_images/uk.jpg');
		$('#imageload').css('display','');
		$('#brokery_header').css('display','');
	}
	function swiss(){
		hide_brokery();
		$('#loadimg').attr('src','front_images/swiss.jpg');
		$('#imageload').css('display','');
		$('#brokery_header').css('display','');
	}
	function main(){
		show_brokery();
		hide_all();
	}

	function hide_all(){
		$('#imageload').css('display','none');
		$('#brokery_header').css('display','none');
	}
</script>