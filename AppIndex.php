<?php
require_once 'dbConnect.php';
if(isset($_REQUEST['shop'])){
	$_SESSION['shop'] = $_REQUEST['shop'];
}
echo "Welcome To ".$_SESSION['shop'];
?>