
<!DOCTYPE html> 
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<meta charset="UTF-8">
  <title>MoPay</title>
  
  
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/style.css">
     <link href="<?php echo base_url(); ?>assets/home/vendors/nprogress/nprogress.css" rel="stylesheet">
     <link href="<?php echo base_url(); ?>assets/home/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">




     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MoPay </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/home/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/home/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/home/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/home/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/home/build/css/custom.min.css" rel="stylesheet">
  	  



</head>
<body>


<body class="login">
<div>
     <a class="hiddenanchor" id="signup"></a>
     <a class="hiddenanchor" id="signin"></a>
	

	<div class="login_wrapper">
		<div class="animate form login_form">
			<section id="content">
				<form  >
					<h1>Login</h1>
					<div>
						<input type="text" placeholder="Email" required="" id="username" name="username" />
					</div>
					<div>
						<input type="password" placeholder="Password" required="" id="password" name="password"/>
					</div>
					<div>
						<input type="submit" name="login" value="Login" id="submit" />
						<a href="#signup" class="to_register"> Create Account </a>
					</div>
				</form><!-- form -->
        <div class=""></div>
                <div>
                  <h1><img width="50%" height="50%" src="<?php echo base_url(); ?>/assets/home/production/images/mopay2_1.png"> </h1>
                  <p>©2018 All Rights Reserved. Mobile Payment . Privacy and Terms</p>
                </div>
			</section><!-- content -->
		</div><!-- container -->





	<div id="register" class="animate form registration_form">
        <section class="login_content">
           <form role="search"  method="POST" action="<?php echo base_url() ?>index.php/auth/input">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="ID Petugas" required="" name="id" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Nama Petugas" required="" name="nama" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="user" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="pass" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Repeat Password" required="" name="repass" />
              </div>
              <div>
                <button class="btn btn-default" name="add">Submit</button> 
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> MoPay</h1>
                  <p>©2017 All Rights Reserved. Mobile Payment . Privacy and Terms</p>
                </div>
              </div>
            </form>
        </section>
    </div>
    </div>
</div>


<script type="text/javascript">

$('form').submit(function(event){
event.preventDefault();
const email = $('#username').val();
const pass = $('#password').val();

const user = {
	email,
	pass
	};
	
	//console.log(user);
	
	$.ajax({
  	type: "POST",
  	url:  "https://api.ignasiusleo.com/admin/login",
  	data: user,
	dataType: "json",
  	success: function(msg){
        	console.log(msg[0]);
		if(msg[0].email == undefined){
		alert('Email atau Password Salah');
		}
		else{
		//localStorage.setItem('logindata', JSON.stringify(msg[0]));
		Cookies.set('logindata', email, { expires: 1 });
		window.location.href = "http://localhost/Mopay/index.php/auth/";
		}
  	},
  	error: function(XMLHttpRequest, textStatus, errorThrown) {
     		alert("Username tidak terdaftar");
		console.log(errorThrown);
  	}
	});
});
	</script>
</body>
</html>