<?php
function __autoload($class) {
	include("../controller/".$class.".php") ; 
}
$path = explode("/",$_SERVER['PATH_INFO']) ; 
$class= $path[1] ;
$function= $path[2] ;

$className = new $class() ;
$className->$function(); 
exit(0) ; 
