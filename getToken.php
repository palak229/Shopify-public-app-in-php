<?php
require_once 'dbConnect.php';
require_once 'vendor/autoload.php';
use Unirest\Request as Unirest;

if(isset($_REQUEST['shop']) && isset($_REQUEST['code'])){
	/* get app credentials and redirect url*/
	$dbquery = $db->prepare("SELECT * FROM tbl_appsettings order by id ASC limit 1");
	$dbquery->execute();
	$select_settings = $dbquery->get_result();
	$app_settings = $select_settings->fetch_assoc();
	$dbquery->close();
	/* get app credentials and redirect url*/

	/*Request shop access token*/
	$shop = $_REQUEST['shop'];
	$url = 'https://'.$_REQUEST['shop'].'/admin/oauth/access_token';
	$header = array(
		'Accept' => 'application/json',
	);
	$data = array(
		'client_id' => $app_settings['api_key'],
		'client_secret' => $app_settings['shared_secret'],
		'code' => $_REQUEST['code']
	);
	$response = Unirest::post($url, $header, $data);
	/*Request shop access token*/

	/*Save access token in DB*/
	if($response->code == 200 && isset($response->body->access_token)){
		$access_token = $response->body->access_token;
		$dbquery = $db->prepare("SELECT * FROM tbl_usersettings WHERE storename = ?");
		$dbquery->bind_param("s", $shop);
		$dbquery->execute();
		$getToken = $dbquery->get_result();
		$dbquery->close();

		if($getToken->num_rows > 0){
			$dbquery = $db->prepare("UPDATE tbl_usersettings SET access_token = ? WHERE storename = ?");
			$dbquery->bind_param("ss", $access_token, $shop);
			$dbquery->execute();
			$dbquery->close();
		} else {
			$dbquery = $db->prepare("INSERT INTO tbl_usersettings (`access_token`,`storename`) VALUES (?, ?)");
			$dbquery->bind_param("ss", $access_token, $shop);
			$dbquery->execute();
			$dbquery->close();
		}
		header('location:https://'.$shop.'/admin/apps');
	}
	/*Save access token in DB*/
}