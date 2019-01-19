<!DOCTYPE html>
<html>
<head>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js'></script>

	<title></title>
</head>
<body>

          <div class="">
            <div class="row top_tiles" style="margin: 10px 0;">
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total Topup</span>
                <h2 id="TotTop">Rp 0,-</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total Dealings Payment</span>
                <h2 id="TotTrans">Rp 0 ,-</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <!-- <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline_two" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span> 
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div> -->
            </div>
            <br />

 
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph x_panel">
                  <div class="row x_title">
                    <div class="col-md-6">
                      <h3>History Topup <small></small></h3>
                    </div>
                    <div class="col-md-6">
                      <div class="title_right">
                      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                          <input id="cari" name="cari" class="form-control" type="text" placeholder="Search by phone...">
                          <span class="input-group-btn">
                            <button class="btn btn-default " type="button" onclick="search();"><i class="fa fa-search"></i></button>
                          </span>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Data record Topup Mobile Payment : <code>*</code>
                    </p>
                    <table id="table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Phone Number</th>
                          
                          <th>Total </th>
                          <th>Date</th>
                         
                        </tr>
                      </thead>


                      <tbody id="myTable">
                       <!-- <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                      
                        </tr>
                         <tr>
                          <td>Iwak</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                      
                        </tr>
                        <tr>
                          <td>blabla</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                      
                        </tr> -->
                      </tbody>
                    </table>
                      <div class="btn-group  btn-group-sm">
                          
                          <span  id="PreeValue" class="btn btn-default">Prev</span>
                                <span  id="nextValue" class="btn btn-default">Next</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph x_panel">
                  <div class="row x_title">
                    <div class="col-md-6">
                      <h3>Dealings Payment <small></small></h3>
                    </div>
                    <div class="col-md-6">
                      <div class="title_right">
                      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div id="myDiv" class="input-group">
                          <!-- <input id="caritrans" name="caritrans" class="form-control" type="text" placeholder="Search by ID Merchant..."> -->
                          <span class="input-group-btn">
                            <button class="btn btn-default " type="button" onclick="searchTrans();"><i class="fa fa-search"></i></button>
                          </span>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Data record Dealings Mobile Payment : <code>*</code>
                    </p>
                    <table id="table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Phone Number</th>
                          <th>ID Merchan</th>
                          <th>Total</th>
                          <th>Tanggal</th>
                    
                        </tr>
                      </thead>


                      <tbody id="myTableTrans">
                       <!-- <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                      
                        </tr>
                         <tr>
                          <td>Iwak</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                      
                        </tr>
                        <tr>
                          <td>blabla</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                      
                        </tr> -->
                      </tbody>
                    </table>
                      <div class="btn-group  btn-group-sm">
                          
                          <span  id="PreeValue1" class="btn btn-default">Prev</span>
                          <span  id="nextValue1" class="btn btn-default">Next</span>
                      </div>
                    </div>
                    <button id="del" onclick="Delete();" class="btn btn-danger pull-right" style="visibility: hidden;">Debet</button>
                    <div class="col-md-3 col-sm-3 col-xs-6 tile">
                      <span>Total Transaction</span>
                      <h2 id="totaltrans">Rp 0 ,-</h2>
                      <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


  <script >
  var b = [];
  var table =  $('#myTable');
  function ExecuteQuery(query, callback){
    $.post("https://api.ignasiusleo.com/payments/getTopup", query,
     function(data){ callback(data);  },
     "json");
  }

  function search(){
    $("#myTable").find("tr").empty();
    var keyword = document.getElementById("cari").value;
    if(keyword==""){
      var katakunci1 = {};

    }
    else{
      var katakunci1 = {'ID_Merchan':keyword};
    }
    ExecuteQuery(katakunci,function(results){
      b = results;
      var max_size=b.length;
      var sta = 0;
     
        var elements_per_page = 10;
        var limit = elements_per_page;
        goFun(sta,limit);
        function goFun(sta,limit) {

        for (var i =sta ; i < limit; i++) {
        var $nr = $('<tr role="row" class="even"><td>' + b[i]['phone'] + '</td><td>'  + b[i]['Total'] + '</td><td>' +  b[i]['Tanggal'] + '</td>');
        table.appendC($nr);
        }
      }
    });
  }
      
  $(document).ready(function(){   
    ExecuteQuery("{}", function(results) {
        // console.log(results);
      b = results;
        //console.log(b);
      var max_size=b.length;
      var sta = 0;
      var elements_per_page = 10;
      var limit = elements_per_page;
      var totalTopup = 0;
      for (var i =sta ; i < max_size; i++) {
        totalTopup = totalTopup + parseInt(b[i]['Total']);
        document.getElementById("TotTop").innerHTML = 'Rp '+ totalTopup;
      }
      goFun(sta,limit);
      function goFun(sta,limit) {
          for (var i =sta ; i < limit; i++) {
          var $nr = $('<tr"><td>' + b[i]['phone'] + '</td><td>'  + b[i]['Total'] + '</td><td>' +  b[i]['Tanggal'] + '</td>');
            table.append($nr);
          }
        }

      $('#nextValue').click(function(){
        var next = limit;
        if(max_size>=next) {
        limit = limit+elements_per_page;
        table.empty();
        goFun(next,limit);
        }
        });
      $('#PreeValue').click(function(){
        var pre = limit-(2*elements_per_page);
        if(pre>=0) {
          limit = limit-elements_per_page;
          table.empty();
          goFun(pre,limit); 
        }
      });
    });
  }); 
    


//////////////transakasi
var a = [];
var table2 =  $('#myTableTrans');
function ExecuteQuery1(query, callback){
    $.post("https://api.ignasiusleo.com/payments/getPaymentByMerchan", query,
     function(data){ callback(data);  },
     "json");
  }

function searchTrans(){
  $("#myTableTrans").find("tr").empty();
  var keyword = document.getElementById("caritrans").value;

  if(keyword==""){
    var katakunci = {};
    document.getElementById("del").style.visibility = "hidden";
  }
  else{
    var katakunci = {'ID_Merchan':keyword};
    document.getElementById("del").style.visibility = "visible";
  }
  ExecuteQuery1(katakunci,function(results){
    a = results;
    var max_size=a.length;
    var sta = 0;
    var elements_per_page = 10;
    var limit = elements_per_page;
    var tot = 0;
     for (var i =sta ; i < max_size; i++) {
        tot = tot + parseInt(a[i]['Total']);
        document.getElementById("totaltrans").innerHTML = 'Rp '+  tot;
      }
    goFun(sta,limit);
      function goFun(sta,limit) {
          for (var i =sta ; i < limit; i++) {
               var $nr = $('<tr role="row" class="even"><td>' + a[i]['phone'] + '</td><td>' + a[i]['ID_Merchan'] + '</td><td>' +  a[i]['Total'] + '</td><td>' +  a[i]['Tanggal'] + '</td>');
                  table2.append($nr);
            
          }
          
        }
  });
} 
  $(document).ready(function(){   
    ExecuteQuery1("{}", function(results) {
        // console.log(results);
      a = results;
        //console.log(b);

      var max_size=a.length;
      var sta = 0;
      var elements_per_page = 10;
      var limit = elements_per_page;
      var transaksi = 0;
      for (var i =sta ; i < max_size; i++) {
        transaksi = transaksi + parseInt(a[i]['Total']);
        document.getElementById("TotTrans").innerHTML = 'Rp '+  transaksi;
      }
      goFun(sta,limit);
      function goFun(sta,limit) {
          for (var i =sta ; i < limit; i++) {
               var $nr = $('<tr role="row" class="even"><td>' + a[i]['phone'] + '</td><td>' + a[i]['ID_Merchan'] + '</td><td>' +  a[i]['Total'] + '</td><td>' +  a[i]['Tanggal'] + '</td>');
                  table2.append($nr);
            
          }
          
        }

      $('#nextValue1').click(function(){
        var next = limit;
        if(max_size>=next) {
        limit = limit+elements_per_page;
        table2.empty();
        goFun(next,limit);
        }
        });
      $('#PreeValue1').click(function(){
        var pre = limit-(2*elements_per_page);
        if(pre>=0) {
          limit = limit-elements_per_page;
          table2.empty();
          goFun(pre,limit); 
        }
       /* transaksi = transaksi + parseInt(a[i]['Total']);
        document.getElementById("TotTrans").innerHTML = 'Rp '+  transaksi;*/
      });
    });
  }); 
    

////coba

///////buat dropdown
var c = [];
function ExecuteQuery3(query, callback){
  $.post("https://api.ignasiusleo.com/merchant", query,
   function(data){ callback(data);  },
   "json");
}

var key = {};
var myDiv = document.getElementById("myDiv");
//Create array of options to be added

//Create and append select list
var selectList = document.createElement("select");
selectList.id = "caritrans";
selectList.className ="form-control form-control-line";
myDiv.appendChild(selectList);

//Create and append the options
ExecuteQuery3(key,function(results){
  b = results;
  var option = document.createElement("option");
  option.value =  '';
  option.text =  '--------------------------';
  selectList.appendChild(option);
  for (var i = 0; i < b.length; i++) {
    var option = document.createElement("option");
    option.value =  b[i]['ID_Merchan'];
    option.text =  b[i]['Merchan_Name'];
    selectList.appendChild(option);
  }
});




///////BUat hapus
function Delete(x){
  var mid = document.getElementById("caritrans").value;
      // alert(mid);
  var retVal = confirm("Do you want to Update  "+mid+"?");
  if( retVal == true ) {
      const ID_Merchan = mid;
      const pay = {
          ID_Merchan
        };
        $.ajax({
      type: "POST",
      url:  "https://api.ignasiusleo.com/payments/takeMoneyMerchan",
      data: pay,
      dataType: "json",
      success: function(msg){
        console.log(msg[0]);
        if(msg[0].message == undefined){
          alert('Delete Failed');
        }
        else{
        //localStorage.setItem('logindata', JSON.stringify(msg[0]));
        //Cookies.set('logindata', email, { expires: 1 });
        //window.location.href = "http://localhost/Mopay/index.php/auth/";
          alert(JSON.stringify(msg[0].message));
          window.location.reload();
        }
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert("Payment undefined");
        console.log(errorThrown);
      }
    });              
  } else {
    window.location.reload();
  }
}



</script>
</body>
</html>