<?php
	include_once('classes/validate.class.php');
	if($_SERVER['HTTP_HOST'] != "127.0.0.1"){
		$_SERVER['REMOTE_ADDR'] = isset($_SERVER["HTTP_CF_CONNECTING_IP"]) ? $_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER["REMOTE_ADDR"];
	}
	$status = 0;
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	
	$sessionid = isset($_REQUEST['sessionid'])  ? $_REQUEST['sessionid'] : "";
	$userid = isset($_REQUEST['userid'])  ? $_REQUEST['userid'] : "";
	
	$validate = new validate($userid,$sessionid,$ipaddress);
	
	if($_REQUEST['userid'] == "host"){
		//echo "host";
		$status = $validate->updateHost();
	}else{
		$status = $validate->updateUser();
	}
	echo "status=".$status;
?>