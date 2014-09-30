<?php include_once('header.php'); ?>

<?php if(!isset($_SESSION['jigowatt']['username'])) { 
		header('Location: login.php');
	  }
?>
<div>
		<div id="flashcontent"></div>
	</body>
</div>
<script src="js/swfobject.js"></script>
<script>
function call_video(){
	 var flashvars = {}; 
	 flashvars.userid= "<?php echo $_SESSION['jigowatt']['username']; ?>"; 
	 flashvars.sessionid= "<?php echo $_SESSION['jigowatt']['sessionid']; ?>";
	 swfobject.embedSWF(
	 "images/listener-s2.swf",
	 "flashcontent",
	 "550",
	 "400",
	 "9.0.0",
	 "images/listener-s2.swf",
	 flashvars,
	 {"userid": "<?php echo $_SESSION['jigowatt']['username']; ?>",
	 "sessionid": "<?php echo $_SESSION['jigowatt']['sessionid']; ?>"});
}
call_video();

</script>

<?php include_once('footer.php'); ?>