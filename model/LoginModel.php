<?php
class LoginModel {

	public function login() {
		include('fbLogin.php') ; 

	}
	public function callback() {

include('fbCallBack.php')  ; 
	}

}
