<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mobile Payment </title>
   <!--  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets\login\img\logo.png"> -->
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/home/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/home/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/home/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/home/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>assets/home/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>assets/home/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/home/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/home/production/images/mopay3.png" sizes="16x16" href="">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/home/build/css/custom.min.css" rel="stylesheet">


 
    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>assets/home/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/home/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/home/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/home/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/home/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <br>
              <a href="<?php echo base_url() ?>index.php/auth" class="site_title"><img width="80%" height="90%" src="<?php echo base_url(); ?>/assets/home/production/images/mopay2.png"> </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $nama ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url().'index.php/auth';?>"><i class="fa fa-home"></i> Home </a>
                    
                  </li>
                  
                  
                  <li><a ><i class="fa fa-users"></i> Customers 
                    <span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                      <li><a href="<?php echo base_url().'index.php/customers';?>"><i></i> Show Customers</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/customers/add"><i></i> Create New</a></li>
                      
                    </ul>
                  </li>  
                  </li>
                  <li><a ><i class="fa fa-cubes"></i> Merchant 
                    <span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                      <li><a href="<?php echo base_url().'index.php/merchant';?>">Show Merchant</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/merchant/input">Create New</a></li>
                      <!-- <li><a href="<?php echo base_url(); ?>index.php/merchant/debit">Debit</a></li> -->
                    </ul>
                  </li>
                  <li><a ><i class="fa fa-shopping-cart"></i> Items 
                    <span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                      <li><a href="<?php echo base_url().'index.php/comodity';?>">Items List</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/comodity/add">Create New</a></li>
                    </ul>
                  </li>
               
                  <li><a href="<?php echo base_url().'index.php/auth/logout';?>"><i class="fa fa-power-off"></i> Logout </a>
                  </li>
                </ul>
              </div>
             
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php //echo base_url().'index.php/auth/logout';?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>
        
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $nama ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li>
                      <a href="" class='user-profile dropdown-toggle'>
                        <i class="fa fa-gear pull-right"></i> Settings
                      </a>
                    </li>
                    <li><a href="<?php echo base_url().'index.php/auth/help';?>"> <i class="fa fa-question-circle pull-right"></i> Help</a></li>
                    <li><a href="<?php echo base_url().'index.php/auth/about';?>"> <i class="fa fa-info-circle pull-right"></i> About</a></li>
                    <li><a href="<?php echo base_url().'index.php/auth/logout';?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1056px;">
          <!-- top tiles -->
          <div class="row tile_count">
            
          </div>
          <!-- /top tiles -->

         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                     <div class="col-md-6">
                    <h3>Mobile Payment <small>Easy Payment Easy Life</small></h3>
                  </div>
                    <div id="calndar" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="fa fa-calendar"></i>
                      <span><?php echo date('Y-m-d')?></span> <b class="caret"></b>
                      </div>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                       <?php echo $contents; ?>
                  </div>
                </div>
                        
                  </div>
                </div>
              </div>
            </div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
          <i class="fa fa-copyright"></i>Copyright 2018 | Mobile Payment - ABDULLAH AFLAHA ASLAM<a target="_blank" href="https://ignasiusleo.com"> - IGNASIUS AGUS LEONARDO</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
   

    

    <!-- jQuery -->
    <script src="<?php  echo base_url(); ?>assets/home/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php  echo base_url(); ?>assets/home/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php  echo base_url(); ?>assets/home/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php  echo base_url(); ?>assets/home/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php  echo  base_url(); ?>assets/home/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php  echo  base_url(); ?>assets/home/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php  echo base_url(); ?>assets/home/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php  echo  base_url(); ?>assets/home/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php  echo base_url(); ?>assets/home/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php  echo base_url(); ?>assets/home/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php  echo  base_url(); ?>assets/home/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php  echo base_url(); ?>assets/home/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo  base_url(); ?>assets/home/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php  echo base_url(); ?>assets/home/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php  echo base_url(); ?>assets/home/vendors/moment/min/moment.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php  echo base_url(); ?>assets/home/build/js/custom.min.js"></script>

    <script src="<?php  echo base_url(); ?>assets/home/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/home/vendors/pdfmake/build/vfs_fonts.js"></script>
  
  </body>
</html>
