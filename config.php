<?php
session_start();
require_once "vendor/autoload.php";
$gClient=new Google_Client();
$gClient->setClientId("");
$gClient->setClientSecret("");
$gClient->setApplicationName("CPI Login Tutorial");
$gClient->setRedirectUri("http://localhost:8090/google-api-authorization/g-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login  https://www.googleapis.com/auth/userinfo.email");
?>