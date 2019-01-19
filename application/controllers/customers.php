<?php

	class Customers extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();

		}

		function index(){
			ceklogin();
			$this->template->load('templateku','customers/index');

		}
		function add(){
			ceklogin();
			$this->template->load('templateku','customers/add');

		}
		function topup(){
			ceklogin();
			
			$data['phone'] =  $this->uri->segment(3);
			$data['balance'] =  $this->uri->segment(4);	
			$data['email'] =  $this->uri->segment(5);		
			$this->template->load('templateku','customers/topup',$data);
		}

	}
	

?>
