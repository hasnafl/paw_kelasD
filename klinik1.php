<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['akses']!="klinik1"){
    die("Anda bukan bagian dari Hasna Medica I");//jika bukan admin jangan lanjut
}
?>
<?php
include('koneksi_data.php'); 
?>
<!--dokumen-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Hasna Medica I</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    
  <meta charset="utf-8">
  <meta name="viewport" content="content">
  <title>Responsive Image Slider</title>
  <script type="text/javascript" src="js2/jQuery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js2/jquery.cycle2.min.js"></script>
<style type="text/css">
  * { margin: 0; padding: 0; }
  img { max-width: 100%; }
  .cycle-slideshow {
    width: 100%;
    max-width: 960px;
    display: block;
    position: relative;
    margin: 20px auto;
    overflow: hidden;
  }
  .cycle-prev, .cycle-next {
    font-size: 200%;
    color: #fff;
    display: block;
    position: absolute;
    top: 50%;
    z-index: 9999;
    cursor: pointer;
    margin-top: -16px;
  }
  .cycle-prev { left: 42px; }
  .cycle-next { right: 62px; }
  .cycle-pager {
    position: absolute;
    width: 100%;
    height: 10px;
    bottom: 10px;
    z-index: 9999;
    text-align: center;
  }
  .cycle-pager span {
    text-indent: 100%;
    top: 100px;
    width: 10px;
    height: 10px;
    display: inline-block;
    border: 1px solid #fff;
    border-radius: 50%;
    margin: 0 10px;
    white-space: nowrap;
    cursor: pointer;
  }
  .cycle-pager-active { background-color: #fff; }
</style>
<script type="text/javascript">
  function awal()
  {
    a = 0;
    document.getElementById('tampil_f1').value = a;
    document.getElementById('tampil_f2').value = a;
  }
  
  function call_f1()
  {
    var b = document.getElementById('tampil_f1').value
    var c = parseInt(b);
    var d = document.getElementById('tampil_f2').value
    var e = parseInt(d);
      var hasil = c + 1;
      document.getElementById('tampil_f1').value = hasil;
      c = hasil;
  }
  function call_f2()
  {
    var b = document.getElementById('tampil_f1').value
    var c = parseInt(b);
    var d = document.getElementById('tampil_f2').value
    var e = parseInt(d);
      var hasil = e + 1;
      document.getElementById('tampil_f2').value = hasil;
      e = hasil;
    
  }
</script>
  </head>

  <body onload="awal()">
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="klinik1.php" class="logo">HASNA <span class="lite">MEDICA</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                    <a href="logout.php" class="btn btn-primary"><i class="fa fa-close"></i>  Logout</a>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    
                    <!-- user login dropdown end -->
               
                <!-- notificatoin dropdown end-->
            
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="klinik1.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Admin Menu</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="daftar_pengguna.php">Daftar Pengguna</a></li>                          
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Registrasi</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="pendaftaran.php">Pendaftaran</a></li>                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>Data Pasien</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="poli_umum.php">Poli Umum</a></li>
                          <li><a class="" href="poli_gigi.php">Poli Gigi</a></li>                              
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>Farmasi</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="resep.php">Resep</a></li>
                          <li><a class="" href="gudang_obat.php">Gudang Obat</a></li>                                                      
                      </ul>
                  </li>
                             
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Laporan</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="lap_dp.php">Laporan Data Pasien</a></li>
                          
                          <li><a class="" href="diagnosa.php">Diagnosa</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div>
       <script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }
</script>
</head>

<style>
    #jam-digital{overflow:hidden; width:350px; align-items: center; margin-left: 375px;}
    #hours{float:left; width:100px; height:100px; background-color:#6B9AB8; margin-right:25px}
    #minute{float:left; width:100px; height:100px; background-color:#A5B1CB}
    #second{float:right; width:100px; height:100px; background-color:#FF618A; margin-left:25px}
    #jam-digital p{color:#FFF; font-size:36px; text-align:center; margin-top:25px}
</style>

<body onLoad="waktu()">
    <div id="jam-digital" align="center">
        <div id="hours"><p id="jam"></p></div>
        <div id="minute"><p id="menit"></p></div>
        <div id="second"><p id="detik"></p></div>
    </div>
</table>

<div align="center">
  <div style="width:750px; height:auto; margin-top:40px; margin-left: 200px;">
      <div style="width:250px; height:auto; float:left">
        <table align="center">
          <tr>
            <td><font size="5" style="margin-left: 15%;">No Antrian</font></td>
            </tr>
            <tr>
          <td><input type="text" id="tampil_f1" disabled="disabled" style="width:180px; height:140px; background:#F00; border:none; color:#FFF; text-align:center; vertical-align:middle; font-size:90px;" />
</td>    
            </tr>
            <tr height="50">
          <td><button style="margin-left: 30%;" onclick="call_f1()">Panggil</button></td>     
            </tr>
            <tr>
            <td><font size="+2">Antrian Poli Umum</font></td>
            </tr>
        </table>
        </div>
        <div style="width:250px; height:auto; float:left; margin-left: 100px;">
        <table align="center">
          <tr>
            <td><font size="5" style="margin-left: 15%;">No Antrian</font></td>
            </tr>
            <tr>
            <td><input type="text" id="tampil_f2" disabled="disabled" style="width:180px; height:140px; background:#009; border:none; color:#FFF; text-align:center; vertical-align:middle; font-size:90px;" />
</td>
            </tr>
            <tr height="50">
          <td><button style="margin-left: 30%;" onclick="call_f2()">Panggil</button></td>    
            </tr>
            <tr>
            <td><font size="+2" style="margin-left: 5px;">Antrian Poli Gigi</font></td>
            </tr>
        </table>
        </div>
        
    </div>
</div>

      </section>
      <!--main content end--> 
  </section> 
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
