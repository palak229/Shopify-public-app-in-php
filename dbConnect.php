<?php
ob_start();
session_start();
$db = new Mysqli("localhost", "root", "JoshTrustLockSealapp", "TrustLockBadge");
if($db->connect_errno){
  die('Connect Error: ' . $db->connect_errno);
}
$appUrl = 'https://'.$_SERVER['SERVER_NAME'].'/Trust';