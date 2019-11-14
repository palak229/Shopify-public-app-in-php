<?php
require_once 'dbConnect.php';
if(isset($_REQUEST['shop'])){
	$shop = $_REQUEST['shop'];
	$_SESSION['shop'] = $shop;
	/*Check Whether app is already install or not*/
	$tokenQuery = $db->prepare("SELECT * FROM tbl_usersettings WHERE storename = ?");
	$tokenQuery->bind_param("s", $shop);
	$tokenQuery->execute();
	$getToken = $tokenQuery->get_result();
	$tokenQuery->close();
	/*Check Whether app is already install or not*/
	if($getToken->num_rows > 0){
		header('location:'.$appUrl.'/AppIndex.php?shop='.$shop);
	}else{
		/* get app credentials and redirect url*/
		$dbquery = $db->prepare("SELECT * FROM tbl_appsettings order by id ASC limit 1");
		$dbquery->execute();
		$select_settings = $dbquery->get_result();
		$app_settings = $select_settings->fetch_assoc();
		/* get app credentials and redirect url*/
		$nonce = base64_decode(rand(1, 100000));
		$dbquery->close();
		header('location:https://'.$_REQUEST['shop'].'/admin/oauth/authorize?client_id='.$app_settings['api_key'].'&scope='.$app_settings['permissions'].'&redirect_uri='.$app_settings['redirect_url'].'&state='.$nonce);
	}

}else{
	echo "Enter Store name";
}
?>