<?php
session_start();
require_once "/home/mayank/Downloads/facebook-php-sdk-v4-5.0-dev/src/Facebook/autoload.php" ;
$fb = new Facebook\Facebook([
  'app_id' => '496498807187681',
  'app_secret' => '36870d7783b16c5646930c0435be08e4',
  'default_graph_version' => 'v2.4',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email','user_likes']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/olx/web/index.php/Login/submit', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
