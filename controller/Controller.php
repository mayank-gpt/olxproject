<?php


class Controller {

	public function loadModel($class) {
		include("../model/$class.php") ;
return new $class()  ; 
	}

	public function loadView($file)   {

		include("../view/$file.html") ;

	}



}

