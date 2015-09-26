<?php
ini_set("display_errors" , 1)  ; 
class Login extends Controller {
 private $modelClass  ;
 public function __construct() {
$this->modelClass = $this->loadModel ('LoginModel')   ; 

}
	public function loginPage() {
$this->modelClass->login() ;  
		return ;
	}

public function submit() {


$this->modelClass->callback() ;  
}
}
