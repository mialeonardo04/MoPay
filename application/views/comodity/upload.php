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

                      <p>To Add Commodity please complete the form , <code>*</code> means required <a href="form.html">data</a>
                      </p>
                      <span class="section ">Creat New Commodity </span>
                      <div class="item form-group">
                        
                        </label>
                        <div  class="col-md-6 col-sm-6 col-xs-12 ">
                        </div>
                      </div>


                        <!-- <div class="item form-group">
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <div class="product-image"
                          </div>
                          <div class="product_gallery">
                            <a>
                              <img src="" id="myImg">
                            </a>
                            <a>
                              <img src="" id="myImg">
                            </a>
                            <a>
                             <img src="" id="myImg">
                            </a>
                            <a>
                              <img src="" id="myImg">
                            </a>
                          </div>
                        </div>
                        </div> -->




                     <!--  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ID Commodity <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ID_Com" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name"  required="required" type="number">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Name" name="text" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="Number" id="Price" name="Price" data-validate-linked="Price" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Quantity <span class="required">*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="qty" type="number"  name="qty"  class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Description" type="text" name="Description" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div> -->
                       <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Product Image <span class="required">*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fileContainer" type="file" name="Image" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                        <input id="show" type="button" name="Image" data-validate-linked="password" class="btn btn-dark" value="Upload">
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">ID Merchan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12"  id="myDiv"> 
                          <!-- <select class="form-control form-control-line" name="ID_Merchan" id="ID_Merchan" required="required">
                         
                          </select> -->
                         <!--  <input type="number" id="ID_Merchan" name="ID_Merchan" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"> -->
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

///coba
$('input#fileContainer').on('change', function () {
    console.log(this);

    var reader = new FileReader();
    reader.onload = function (e) {
        console.log(reader.result + '->' + typeof reader.result)
        var thisImage = reader.result;
        localStorage.setItem("imgData", thisImage);
    };
    reader.readAsDataURL(this.files[0]);
});


$('input#show').click(function () {
    var dataImage = localStorage.getItem('imgData');
    console.log(dataImage);
    var imgCtr = $('<img/>').prop('src', dataImage);
    document.getElementById("myImg").src = dataImage;
    //$('div#imgContainer').append(imgCtr);
});

//



$('form').submit(function(event){
event.preventDefault();
const ID_Com = $('#ID_Com').val();
const Name = $('#Name').val();
const Price = $('#Price').val();
const qty = $('#qty').val();
const Description = $('#Description').val();
const ID_Merchan = $('#ID_Merchan').val();

const com = {
	ID_Com,
	Name,
	Price,
	qty,
  Description,
  ID_Merchan
	};
	
	//console.log(user);
		$.ajax({
	  	type: "POST",
	  	url:  "https://api.ignasiusleo.com/commodity/addCommodity",
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
			alert("Commodity has been created");
			window.location.href = "<?php echo base_url()?>index.php/comodity/upload";
			/*}*/
	  	},
	  	error: function(XMLHttpRequest, textStatus, errorThrown) {
	     		alert("Input Data Failed");
			console.log(errorThrown);
			window.location.href = "<?php echo base_url()?>index.php/comodity/add";
	  	}
		});
	
});





///////cobaa
var b = [];
var table =  $('#myTable');
function ExecuteQuery(query, callback){
  $.post("https://api.ignasiusleo.com/merchant", query,
   function(data){ callback(data);  },
   "json");
}

var katakunci = {};
var myDiv = document.getElementById("myDiv");
//Create array of options to be added

//Create and append select list
var selectList = document.createElement("select");
selectList.id = "ID_Merchan";
selectList.className ="form-control form-control-line";
myDiv.appendChild(selectList);
//Create and append the options
ExecuteQuery(katakunci,function(results){
  b = results;
  for (var i = 0; i < b.length; i++) {
    var option = document.createElement("option");
    option.value =  b[i]['ID_Merchan'];
    option.text =  b[i]['Merchan_Name'];
    selectList.appendChild(option);
  }
});

	</script>
</body>
</html>