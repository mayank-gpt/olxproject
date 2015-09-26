<?php
ini_set("display_errors" , 1)  ; 
class Login extends Controller {

// public function __construct() {
//}
	public function loginPage() {
$this->loadView ('login') ;  
		return ;
	}

public function submit() {
echo "Logged in" ; 


}
}
