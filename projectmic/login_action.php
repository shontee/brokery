<?php
session_start();




if($_POST['username'] == "txt19000" && $_POST['pass'] == "abcd1234"){
	$_SESSION['sessionid'] = "hh88hh90";
	header("Location: brokery.php");
}else{
	header("Location: index.php?error=1");
}

session_write_close();

?>