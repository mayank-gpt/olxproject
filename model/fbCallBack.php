<?php
session_start();
require_once "/home/mayank/Downloads/facebook-php-sdk-v4-5.0-dev/src/Facebook/autoload.php" ;
$fb = new Facebook\Facebook([
		'app_id' => '496498807187681',
		'app_secret' => '36870d7783b16c5646930c0435be08e4',
		'default_graph_version' => 'v2.4',
		]);

try {
	// Returns a `Facebook\FacebookResponse` object
	$response = $fb->get('/me?fields=id,name,email', 'CAAHDkCMIqOEBAP2lHzQfz7TArh6KYZAhkaZBzeqjThTo21TO2wCRPZCLZCCyJZCNoPEe0Ntw4xuZBsfzk3jQJnQkcHQwWvPSuaTKZATZBTF80T872wjr0EmPC1nNyfI0jEZBaEwcQIW61dZCL3XvYZCACi9Hafz5xgIeT5UZBJEvzgywcHWGX1BFyA7ZATdGVRZCjrhn7SPDVGehSpXkL7x4qTeY4e');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
	echo 'Graph returned an error: ' . $e->getMessage();
	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
	exit;
}




$user = $response->getGraphUser();
$id = $user['id'] ;
try {
	// Returns a `Facebook\FacebookResponse` object
	$response = $fb->get($id.'/likes', 'CAAHDkCMIqOEBAP2lHzQfz7TArh6KYZAhkaZBzeqjThTo21TO2wCRPZCLZCCyJZCNoPEe0Ntw4xuZBsfzk3jQJnQkcHQwWvPSuaTKZATZBTF80T872wjr0EmPC1nNyfI0jEZBaEwcQIW61dZCL3XvYZCACi9Hafz5xgIeT5UZBJEvzgywcHWGX1BFyA7ZATdGVRZCjrhn7SPDVGehSpXkL7x4qTeY4e');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
	echo 'Graph returned an error: ' . $e->getMessage();
	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
	exit;
}




$user = $response->getDecodedBody();
foreach($user['data'] as $key=>$value) {
$name = $value['name'] ; 
$a  =file_get_contents("http://olx.in/all-results/q-cars") ;
if($a) {
print_r($a)  ; 
exit;
}
}











