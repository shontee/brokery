<?php
session_start();
unset($_SESSION['sessionid']);
header("Location: index.php");
?>	