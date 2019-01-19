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
                      <span class="section ">Update Quantity | <small>Menambah Kuantitas barang</small></span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ID Items </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ID_Com" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="phone" required="required" disabled="disabled" type="text" value="<?php echo $id ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Quantity </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="qty" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="email" required="required"  type="number" value="<?php echo $qty ?>">
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
const ID_Com = $('#ID_Com').val();
const qty = $('#qty').val();
/*const email =  $('#email').val();
const topup = $('#topup').val();
const saldo1 = parseInt(balance) + parseInt(topup);
const saldo = saldo1.toString();
const Total = topup;
const Tanggal = formatDate(Date.now());*/

const com = {
	ID_Com,
	qty
};
	
	//console.log(user);
	
	$.ajax({
		type: "POST",
		url:  "https://api.ignasiusleo.com/commodity/updateQty",
	  	data: com,
		dataType: "json",
	 	success: function(msg){
	       	console.log(msg[0]);
			/*if(msg[0].email == undefined){
			alert('Email atau Password Salah');
			}
			else{*/
			//localStorage.setItem('logindata', JSON.stringify(msg[0]));
			/*Cookies.set('logindata', email, { expires: 1 });*/
			alert("Quantity has been Updated");
			window.location.href = "<?php echo base_url()?>index.php/comodity/index";
			/*}*/
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			alert("Update Data Failed");
			console.log(errorThrown);
			window.location.href = "<?php echo base_url()?>index.php/comodity/edit/"+ID_Com+"/"+qty;
		}
	});
	
});

</script>
</body>
</html>