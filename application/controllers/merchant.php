<?php

	class Merchant extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();

		}

		function index(){
			ceklogin();
			$this->template->load('templateku','merchant/index');

		}
		function input(){
			ceklogin();
			$this->template->load('templateku','merchant/input');

		}
		function edit(){
			ceklogin();
			$data['id'] =  $this->uri->segment(3);
			$this->template->load('templateku','merchant/edit',$data);

		}

	}
	

?>
