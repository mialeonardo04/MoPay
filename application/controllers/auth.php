<?php

	class Auth extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();

		}

		function index(){
			if (isset($_COOKIE['logindata'])) {
				if (isset($_SESSION['email'])) {
					echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
						<script src='https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js'></script>";
					echo "<script type='text/javascript'>Cookies.remove('logindata');</script>";
				} else {
					$_SESSION['email'] = $_COOKIE['logindata'];	
					echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
						<script src='https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js'></script>";
					echo "<script type='text/javascript'>Cookies.remove('logindata');</script>";
				}
				
				$this->template->load('templateku','home');
			} else {
				if (isset($_SESSION['email'])) {
					$this->template->load('templateku','home');
				} else {
					$this->load->view('form_login');
				}
			}

		}

		function login(){
		$this->load->view('form_login');
		}

		function logout(){
			$this->session->sess_destroy();
			$this->load->view('form_login');
		}
	}
	

?>
