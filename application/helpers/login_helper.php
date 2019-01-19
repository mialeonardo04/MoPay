<?php 

	function ceklogin(){
		//$ci = & get_instance();
		if (!isset($_SESSION['email'])) {
			redirect('auth/login');
		}
	} 
?>