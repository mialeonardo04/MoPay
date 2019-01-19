
<!DOCTYPE >
<html>
<head>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js'></script>
	<title></title>
</head>
	<body>
      <section id="main-content">
         <!--  <section class="wrapper">
			<div class="row">
				</br>
				<div class="table-responsive">
			
				<p>Search by phone</p>
				<i class="fa fa-search"></i>
				<div class="input-group top_search">
					<input id="cari" name="cari" class="form-control" type="text" placeholder="ex: 081xxx" >
				</div>
  				
				<button class="btn btn-success" type="button" onclick="search();">Search</button>
				<a href="add_merchant.html" class="btn btn-success">&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;</a>
				<p></p>
 -->

	<div class="page-title">
              <div class="title_left">
                <h3>List of Items</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input id="cari" name="cari" class="form-control" type="text" placeholder="Search by Commodity Name...">
                    <span class="input-group-btn">
                      <button class="btn btn-default " type="button" onclick="search();"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          <!--   <a href="#" class="btn btn-default">&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;</a> -->

				<table id="excelDataTable" class="table table-striped jambo_table bulk_action">
				<thead>
        			<tr class="headings">

			            <th class="column-title">ID Comodity</th>
			            <th class="column-title">Name</th>
				 		<th class="column-title">Price</th>
						<th class="column-title">Quantity</th>
						<th class="column-title">Description</th>
						<th class="column-title">Merchant Name</th>
						<th class="column-title">Action</th>
  
			       </tr>
			       </thead>
				<tbody id="myTable">
				</tbody>
				</table>
				<div class="btn-group  btn-group-sm">
						
						<span  id="PreeValue" class="btn btn-default">Prev</span>
          				<span  id="nextValue" class="btn btn-default">Next</span>
                      </div>
				</div>
			</div>
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <!--<footer class="site-footer">
          <div class="text-center">
              Copyright 2018 Crown Fintech. Design By - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
<!-- js placed at the end of the document so the pages load faster -->


    <!--common script for all pages-->

<script>
var b = [];
var table =  $('#myTable');
function ExecuteQuery(query, callback){
  $.post("https://api.ignasiusleo.com/commodity/getItems", query,
   function(data){ callback(data);  },
   "json");
}

function search(){
	$("#myTable").find("tr").empty();
	var keyword = document.getElementById("cari").value;
	if(keyword==""){
		var katakunci = {};
	}
	else{
		var katakunci = {'Name':keyword};
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
			var $nr = $('<tr><td>' + b[i]['ID_Com'] + '</td><td>' + b[i]['Name']  + '</td><td>'  + b[i]['Price'] + '</td><td>' +  b[i]['qty'] + '</td><td>' + b[i]['Description'] + '</td><td>' + b[i]['Merchan_Name'] +'</td><td><a href="#" onclick="buatedit(this)"><i class="fa fa-edit"></i></a>       <a href="#" onclick="buathapus(this)"><i class="fa fa-trash"></i></a>'+ '      <a href="<?php echo base_url()?>index.php/comodity/payment/'+b[i]['ID_Com'] +'" ><i class="fa fa-money"></i></a>'+ '</td></tr>');
        		table.append($nr);
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
	 	goFun(sta,limit);
	 	function goFun(sta,limit) {
	  		for (var i =sta ; i < limit; i++) {
				var $nr = $('<tr><td>' + b[i]['ID_Com'] + '</td><td>' + b[i]['Name']  + '</td><td>'  + b[i]['Price'] + '</td><td>' +  b[i]['qty'] + '</td><td>' + b[i]['Description'] + '</td><td>' + b[i]['Merchan_Name'] +'</td><td><a href="#" onclick="buatedit(this)"><i class="fa fa-edit"></i></a>       <a href="#" onclick="buathapus(this)"><i class="fa fa-trash"></i></a>'+ '      <a href="<?php echo base_url()?>index.php/comodity/payment/'+b[i]['ID_Com'] +'" ><i class="fa fa-money"></i></a>'+ '</td></tr>');
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
	

function buathapus(x){
	var table = document.getElementById('myTable');
	var rowindex = x.parentNode.parentNode.rowIndex;
	var cellindex = x.parentNode.cellIndex;
	var mid = table.rows[rowindex-1].cells[0].innerHTML;
			// alert(mid);
	var retVal = confirm("Do you want to delete "+mid+"?");
	if( retVal == true ) {
    	const ID_Com = mid;
        const commodity = {
        	ID_Com
        };
        $.ajax({
			type: "POST",
			url:  "https://api.ignasiusleo.com/commodity/delete",
			data: commodity,
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
				alert("Username tidak terdaftar");
				console.log(errorThrown);
			}
		});              
	} else {
		window.location.reload();
	}
}

function buatedit(x){
	var table = document.getElementById('myTable');
    var rowindex = x.parentNode.parentNode.rowIndex;
	var cellindex = x.parentNode.cellIndex;
	var ID_Com = table.rows[rowindex-1].cells[0].innerHTML;
  	var qty = table.rows[rowindex-1].cells[3].innerHTML;
			// alert(mid);
	window.location.href = "<?php echo base_url(); ?>index.php/comodity/edit/"+ID_Com+"/"+qty;
			
}
</script>
	
	</section>
  </body>
</html>