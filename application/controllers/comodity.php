<?php

	class Comodity extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();

		}

		function index(){
			ceklogin();
			$this->template->load('templateku','comodity/index');

		}
		function edit(){
			ceklogin();
			$data['id'] =  $this->uri->segment(3);	
			$data['qty'] =  $this->uri->segment(4);		
			$this->template->load('templateku','comodity/edit',$data);

		}
		function add(){
			ceklogin();
			$this->template->load('templateku','comodity/add');

		}
		function payment(){
			$data['id'] =  $this->uri->segment(3);
			$this->template->load('templateku','comodity/payment',$data);
		}

		///payment user
		function payment2(){
			$data['id'] =  $this->uri->segment(3);
			$this->load->view('comodity/payment2',$data);
		}
		function upload(){
			$this->template->load('templateku','comodity/upload');
		}
		function shop(){
			$this->load->view('comodity/shop');

		}
	}
	

?>
