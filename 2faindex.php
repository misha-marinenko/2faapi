<?php
require_once '2fa.php';

$ga = new PHPGangsta_GoogleAuthenticator();

/* api module */


if(isset($_GET['api'])){
 if(isset($_GET['qr'])){
 	$qrCodeUrl = $ga->getQRCodeGoogleUrl('2fasample', $_GET['api']);
 	echo $qrCodeUrl;
 }elseif(isset($_GET['check'])){
  $oneCode = $ga->getCode($_GET['api']);
  if($_GET['check'] == $oneCode){
  	echo "1";
  }else{echo "0";}
 }elseif(isset($_GET['pin'])){
  $oneCode = $ga->getCode($_GET['api']);
  echo $oneCode;
 }else{}
}else{}


if(isset($_GET['apicreate'])){
 $secret = $ga->createSecret();
 echo $secret;
}else{}
