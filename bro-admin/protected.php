<?php 
	include_once('classes/check.class.php');
	include_once('classes/onlineuser.class.php');
?>
<?php include_once('header.php'); ?>

<?php 
	$onlineuser = new onlineuser();
	if( protectThis("1, 2")) {
		$onlineuserlist = $onlineuser->getOnlineUser();
	}else{
		$onlineuserlist = $onlineuser->getOnlineHost();
	}
	//print_r($onlineuserlist);
?>
<a href="?1234">Refresh</a>
<table class="table">
	<thead>
	<tr>
		<th>No</th>
		<th>Online Users</th>
		<th>Last Login</th>
	</tr>
	</thead>
	<?php 
	$count = 1;
	foreach($onlineuserlist AS $key=>$user_arr){
	?>
	<tbody>
	<tr>
		<td><?php echo $count; ?></td>
		<td><?php echo $user_arr['username'];?></td>
		<td><?php echo $user_arr['timestamp'];?></td>
	</tr>
	</tbody>
	<?php 
	$count++;
	}?>
</table>

<?php include_once('footer.php'); ?>