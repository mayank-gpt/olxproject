<?php


class Controller {

	public function loadModel($class) {

		include("../model/$class.php") ;

	}

	public function loadView($file)   {

		include("../view/$file.html") ;

	}



}

