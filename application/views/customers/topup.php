<!DOCTYPE html>
<html>
<head>
	<title>Top Up</title>
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
                      </p>
                      <span class="section ">Top Up Saldo | <small>Menambah Saldo</small></span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Phone Customer </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="phone" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="phone" required="required" disabled="disabled" type="text" value="<?php echo $phone ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="email" required="required" disabled="disabled" type="email" value="<?php echo $email ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Current Balance <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="balance" name="balance" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12" value="<?php echo $balance; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Top Up Nominal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="topup" name="topup" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
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
        <p>List Price Top Up , </p>
        <p><code>*</code>Rp 10.000  =  Rp 12.500</a></p>
        <p><code>*</code>Rp 20.000  =  Rp 22.000</a></p>
        <p><code>*</code>Rp 50.000  =  Rp 51.000</a></p>
        <p><code>*</code>Rp 100.000  =  Rp 101.000</a></p>
 <script type="text/javascript">

$('form').submit(function(event){
event.preventDefault();
const phone = $('#phone').val();
const balance = $('#balance').val();
const email =  $('#email').val();
const topup = $('#topup').val();
const saldo1 = parseInt(balance) + parseInt(topup);
const saldo = saldo1.toString();
const Total = topup;
const Tanggal = formatDate(Date.now());

const user = {
	phone,
	email,
	saldo
	};

const dataTopupPayment={
	phone,
	Total,
	Tanggal
};
	
	//console.log(user);
	
		$.ajax({
	  	type: "POST",
	  	url:  "https://api.ignasiusleo.com/customers/updateSaldo",
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
			alert("User has been Updated");
			//window.location.href = "http://localhost/Mopay/index.php/customers/index";
			/*}*/
	  	},
	  	error: function(XMLHttpRequest, textStatus, errorThrown) {
	     		alert("Update Data Failed");
			console.log(errorThrown);
			//window.location.href = "http://localhost/Mopay/index.php/customers/topup/"+phone+"/"+balance+"/"+email;
	  	}
		});

		$.ajax({
	  	type: "POST",
	  	url:  "https://api.ignasiusleo.com/payments/doTopup",
	  	data: dataTopupPayment,
		dataType: "json",
	  	success: function(msg){
	        	console.log(msg[0]);
			/*if(msg[0].email == undefined){
			alert('Email atau Password Salah');
			}
			else{*/
			//localStorage.setItem('logindata', JSON.stringify(msg[0]));
			/*Cookies.set('logindata', email, { expires: 1 });*/
			alert("Top Up Succeed");
			window.location.href = "<?php echo base_url()?>index.php/customers/index";
			/*}*/
	  	},
	  	error: function(XMLHttpRequest, textStatus, errorThrown) {
	     		alert("Top Up Failed");
			console.log(errorThrown);
			window.location.href = "<?php echo base_url()?>customers/topup/"+phone+"/"+balance+"/"+email;
	  	}
		});
	
});

function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}
	</script>
</body>
</html>