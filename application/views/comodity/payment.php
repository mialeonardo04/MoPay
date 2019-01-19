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

                      <p>Select amount and confirm to buy, <code>*</code> 
                      </p>
                      <span class="section ">Mopay SHOP </span>

                      <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Product</th>
                          <th>Unit Price</th>
                          <th>Quantity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><i class="fa fa-check-square"></i></th>
                          <td>
                            <input id="ID_Com" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name"  required="required" type="hidden">
                            <input type="text" id="Name" name="text" required="required" class="form-control col-md-7 col-xs-12" readonly="readolny">
                          </td>
                          <td>
                            <input type="Number" id="Price" name="Price" data-validate-linked="Price" required="required" class="form-control col-md-7 col-xs-12" readonly="readolny">
                          </td>
                          <td>
                            <input id="qty" type="number"  name="qty" onchange="tambah(this.value)" class="form-control col-md-7 col-xs-12" required="required">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                      
                                        
                      
                        
                      <div class="ln_solid "></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Price </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="total" type="number"  name="qty" class="" required="required" disabled="disabled" >
                        </div>
                      </div>
                      <div class="form-group r">
                        <div class="col-md-6 col-md-offset-3">  
                          <a href="<?php echo base_url(); ?>index.php/customers" class="btn btn-primary">Cancel</a>
                          <input type="button" name="submit" value="Submit" id="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal"/>
                          <!-- <button id="submit" type="submit" class="btn btn-success">Submit</button> -->
                           </form>
                        </div>
                      </div>
                      
       
 <script type="text/javascript">
///coba


function ExecuteQuery(query, callback){
  $.post("https://api.ignasiusleo.com/commodity", query,
   function(data){ callback(data);  },
   "json");
}

var keyword = <?php echo $id ?>;
var katakunci = {'ID_Com': keyword};
var b=[];
ExecuteQuery(katakunci,function(results){
  b = results;
  
  num  =parseInt(b[0]['Price'] );
  document.getElementById("Name").value = b[0]['Name'];
  document.getElementById("Price").value =(num/1000).toFixed(3);
  document.getElementById("nabar").innerHTML =  b[0]['Name'];
});

tambah = function(){
  var tambah = document.getElementById("qty").value;
  var total = parseInt (tambah)* num;
  document.getElementById("total").value =(total/1000).toFixed(3);
  document.getElementById("gambar").src = 'https://chart.googleapis.com/chart?cht=qr&chl='+<?php echo $id ?>+'/'+tambah+'/'+total+'/&chs=180x180&choe=UTF-8&chld=L|2';
  document.getElementById("tothar").innerHTML =  "Paid amount: Rp."+total+",-";
  }
/*function formatCurrency(num) {

        num = num.toString().replace(/\Rp|/g,'');
        if(isNaN(num))
            num = "0";
        sign = (num == (num = Math.abs(num)));
        num = Math.floor(num*100+0.50000000001);
        cents = num%100;
        num = Math.floor(num/100).toString();
        if(cents<10)
            cents = "0" + cents;
        for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
            num = num.substring(0,num.length-(4*i+3))+'.'+
            num.substring(num.length-(4*i+3));
        asem =toString( ((sign)?'':'-') + 'Rp ' + num + ',' + cents);
        return asem;
    }*/
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">QR Code</h4>
                                </div>
                                <div id="dvContainer">
                                  <div class="modal-body">
                                        <center><img id= "gambar" >
                                        <h4 id="nabar"></h4>
                                        <h4 id="tothar"></h4>
                                        </center>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Right Click->save Barcode</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
</body>
</html>