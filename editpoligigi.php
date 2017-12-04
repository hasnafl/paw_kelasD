<?php
include('koneksi_data.php'); 
?>
<?php
	include('koneksi_data.php');
	if(isset($_GET['ni'])){
		$ni		= $_GET['ni'];
		$query	= mysqli_query($db_link,'select * from pendaftaran1 where id_pasien = "'.$ni.'"');
		$data  	= mysqli_fetch_array($query);
		$nama	= $data['nama'];
		$umur	= $data['umur'];
		$tgl_masuk	= $data['tgl_masuk'];
        $jenis_kelamin	= $data['jenis_kelamin'];
        $alamat	= $data['alamat'];
        $keluhan	= $data['keluhan'];
        $poli = $data['poli'];
        $berat_badan = $data['berat_badan'];
        $tekanan_darah = $data['tekanan_darah'];
        $diagnosa = $data['diagnosa'];
        $resep = $data['resep'];
	}
	else{
	$nama = '';
	$umur = '';
	$tgl_masuk = '';
    $jenis_kelamin = '';
    $alamat = '';
    $keluhan = '';
    $poli = '';
    $berat_badan = '';
        $tekanan_darah = '';
        $diagnosa = '';
        $resep = '';
	}
?>
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
    <link href="assets/dataTables/datatables.min.css" rel="stylesheet" />
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
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="klinik1.php" class="logo">HASNA <span class="lite">MEDICA I</span></a>
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
                          <li><a class="" href="basic_table.html">Laporan Data Pasien</a></li>
                          
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
					<h3 class="page-header"><i class="fa fa-laptop"></i> Registrasi</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="klinik1.php">Home</a></li>
						<li>Registrasi</li>
                        <li>Pendaftaran</li>							  	
					</ol>
				</div>
			</div>
            <div id="page-wrapper" >
            <div id="page-inner">
                           
                <!-- Advanced Tables -->
                    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <form action="savedata.php" method="post">
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-0">
            <form>
            
            <div class="form-group">
                <label for="id_pasien">ID pasien</label>
                <input required type="text" name="id_pasien" class="form-control" value="<?php echo $_GET['ni']; ?>" readonly="readonly">
              </div>
            
              <div class="form-group">
                <label for="nama">Nama</label>
                <input required type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" readonly="readonly">
              </div>
              
              <div class="form-group">
                <label for="umur">Umur</label>
                <input required type="text" name="umur" class="form-control" value="<?php echo $umur; ?>" readonly="readonly">
              </div>

              

              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin [P/L]</label>
                <input required type="text" name="jenis_kelamin" class="form-control" value="<?php echo $jenis_kelamin; ?>" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="poli">Poli</label>
                <input required type="text" name="poli" class="form-control" value="<?php echo $poli; ?>" readonly="readonly">
              </div>

                  
                  
              </select>
              
              <div class="form-group">
                <label for="alamat">Alamat</label>  
                <input required type="text" name="alamat" class="form-control" rows="3" value="<?php echo $alamat; ?>" readonly="readonly">
              </div>
              
              <div class="form-group">
                <label for="keluhan">Keluhan</label>  
                <input required type="text" name="keluhan" class="form-control" rows="3" value="<?php echo $keluhan; ?>" readonly="readonly">
              </div>
              
              <div class="form-group">
                <label for="berat_badan">BB</label>
                <input required type="text" name="berat_badan" class="form-control" value="<?php echo $berat_badan; ?>">
              </div>
              
              <div class="form-group">
                <label for="tekanan_darah">TD</label>
                <input required type="text" name="tekanan_darah" class="form-control" value="<?php echo $tekanan_darah; ?>">
              </div>
              
              <div class="form-group">
                <label for="diagnosa">Diagnosa</label>
                <input required type="text" name="diagnosa" class="form-control" value="<?php echo $diagnosa; ?>">
              </div>
              
              <div class="form-group">
                <label for="resep">Resep</label>
                <input required type="text" name="resep" class="form-control" value="<?php echo $resep; ?>">
              </div>
  
              <button type="submit" class="btn btn-primary" name="diagnosagigi">SIMPAN</button>
            </form>
          </div>
        </div>
      </div>
    </section>
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
    <!--tabel--!>
    <script src="assets/dataTables/datatables.min.js"></script>
    
    <script type="text/javascript">
            $(document).ready(function(){
        $('#datatables').DataTable();
});
    </script>
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
