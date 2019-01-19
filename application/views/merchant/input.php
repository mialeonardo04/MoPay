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
                      <span class="section ">Creat New Account <small>Merchant</small></span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Username" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Username" placeholder="Username(s) e.g Dol" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="First_Name" name="First_Name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Middle Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Mid_Name" name="Mid_Name" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Last Name <span class="required">*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Last_Name" type="text" name="Last_Name" data- class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Location <span class="required">*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Location" type="text" name="Location" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Merchant Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="Merchan_Name" id="Merchan_Name"  placeholder="Merchant Name(s) e.g Dol SHOP" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Nomer Rekening <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="No_rek"   name="No_rek" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="<?php echo base_url(); ?>index.php/merchant" class="btn btn-primary">Cancel</a>
                          <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success"	/>
                          <!-- <button id="submit" type="submit" class="btn btn-success">Submit</button> -->
                           </form>
                        </div>
                      </div>
       
 <script type="text/javascript">

$('form').submit(function(event){
event.preventDefault();
const Username = $('#Username').val();
const First_Name = $('#First_Name').val();
const Mid_Name = $('#Mid_Name').val();
const Last_Name = $('#Last_Name').val();
const Location = $('#Location').val();
const Merchan_Name = $('#Merchan_Name').val();
const No_rek = $('#No_rek').val();

const user = {
	Username,
	First_Name,
	Mid_Name,
	Last_Name,
  Location,
  Merchan_Name,
  No_rek
	};
	
	//console.log(user);
	$.ajax({
      type: "POST",
      url:  "https://api.ignasiusleo.com/merchant/addMerchant",
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
      window.location.href = "<?php echo base_url()?>index.php/merchant/index";
      /*}*/
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
          alert("Input Data Failed");
      console.log(errorThrown);
      window.location.href = "<?php echo base_url()?>index.php/merchant/add";
      }
    });
	
}); 



	</script>
</body>
</html>