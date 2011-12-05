<?php
/**
 * 
 * basic login controller example
 * 
 */
class Login extends Controller {

	function __construct() {
		parent::__construct('login_model');	
	}
	
	function index( ) 
	{	
		$this->viewLoader->render('login' );
	}
	
	function runLogin()
	{
		$this->model->login();
	}
		function runLogout()
	{
		$this->model->logout();
	}

}