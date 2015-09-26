<?php
ini_set("display_errors" ,1)  ;
//include("/home/mayank/Downloads/facebook-php-sdk-v4-5.0-dev/src/Facebook/autoload.php") ;
function __autoload($class) {
	include("../controller/".$class.".php") ; 
}
$path = explode("/",$_SERVER['PATH_INFO']) ; 
$class= $path[1] ;
$function= $path[2] ;

$className = new $class() ;
$className->$function(); 
exit(0) ; 
