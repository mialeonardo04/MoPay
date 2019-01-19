<!DOCTYPE html>
<html>
<head>
	<title>Add Account</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
</head>
<body>
                 <form class="form-horizontal form-label-left" >

                      <p>To Register please complete the form , <code>*</code> means required <a href="form.html">data</a>
                      </p>
                      <span class="section ">Creat New Account <small>Customers</small></span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">First Name </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="first name(s) e.g Dol" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password <span class="required">*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" inputmode="numeric"  placeholder="number only" maxlength="6" name="password" data- class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password <span class="required">*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" data-validate-linked="password" placeholder="number only" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="phone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="<?php echo base_url(); ?>index.php/customers" class="btn btn-primary">Cancel</a>
                          <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success"	/>
                          <!-- <button id="submit" type="submit" class="btn btn-success">Submit</button> -->
                           </form>
                        </div>
                      </div>
       
 <script type="text/javascript">

$('form').submit(function(event){
event.preventDefault();
const first_name = $('#name').val();
const email = $('#email').val();
const Conemail = $('#email2').val();
const pass = $('#password').val();
const Conpass = $('#password2').val();
const phone = $('#phone').val();

const user = {
	first_name,
	email,
	phone,
	pass
	};
	
	//console.log(user);
	if( pass == Conpass && email ==Conemail){
		$.ajax({
	  	type: "POST",
	  	url:  "https://api.ignasiusleo.com/customers/addCustomer",
	  	data: user,
		dataType: "json",
	  	success: function(msg){
	        	console.log(msg[0]);
			/*if(msg[0].email == undefined){
			alert('Email atau Password Salah');
			}
			else{*/
			//localStorage.setItem('logindata', JSON.stringify(msg[0]));
			/*Cookies.set('logindata', email, { expires: 1 });*/
			alert("User has been created");
			window.location.href = "<?php echo base_url()?>index.php/customers/index";
			/*}*/
	  	},
	  	error: function(XMLHttpRequest, textStatus, errorThrown) {
	     		alert("Input Data Failed");
			console.log(errorThrown);
			window.location.href = "<?php echo base_url()?>index.php/customers/add";
	  	}
		});
	}else if(pass != Conpass){
		alert("Password didn't match");
	}else if(email != Conemail){
		alert("Your Email didn't match");
	}
	
});
	</script>
</body>
</html>