<?php
include('koneksi_data.php'); 
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
                  <li >
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
                  <li class="sub-menu" >
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
                          <li class="active"><a class="" href="gudang_obat.php">Gudang Obat</a></li>                                                      
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
					<h3 class="page-header"><i class="fa fa-laptop"></i> Farmasi</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="klinik1.php">Home</a></li>
						<li>Farmasi</li>
                        <li>Gudang Obat</li>							  	
					</ol>
				</div>
			</div>
            <div id="page-wrapper" >
            <div id="page-inner">
                           
                <!-- Advanced Tables -->
                    <div class="panel panel-default">
                                    <?php
                                        $i = 0;
                                        $sql	= 'select * from gudang_obat order by kode_obat asc';
                                        $query	= mysqli_query($db_link,$sql);
                                     ?>  
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="datatables">
                                  <thead>
                                        <tr>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                            				<th>Jenis Obat</th>
                            				<th>Stok</th>
                                            <th>Opsi</th>		
                                        </tr>
                                    </thead> 
                                    <tbody>
                                    <?php
                                    
                                   	while($data	= mysqli_fetch_array($query)){
                                   	$i++;    
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $data['kode_obat']; ?></td>
                            				<td><?php echo $data['nama_obat']; ?></td>
                            				<td><?php echo $data['jenis_obat']; ?></td>
                                            <td><?php echo $data['stok']; ?></td>
                                            <td><a href="editobat.php?ni=<?php echo $data['kode_obat'];?>" class="btn btn-primary btn-sm" ><i class="fa fa-edit">  EDIT</i></a>
                                           
                                            <a href="deleteobat.php?ni=<?php echo $data['kode_obat'];?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-success btn-sm"><i class="fa fa-delete">  HAPUS</i></a></td>
                
                                            </td>
                                            
                                        </tr> 
                                      <?php
                                      }
                                      ?>
                                    </tbody>
                                </table>
                            </div>
                            <a class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>  Tambah</a>
                            <!--modal--!>
                            <div id="tambah" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-tittle">Tambah Daftar Obat</h4>
                                        </div>
                                        <form method="post" enctype="multipart/form-data" action="savedata.php">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="control-label" for="kode_obat">Kode Obat</label>
                                                    <input type="text" name="kode_obat" class="form-control" id="kode_obat" placeholder="Masukan kode obat" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_obat" class="control-label">Nama Obat</label>
                                                    <input required type="text" name="nama_obat" class="form-control" placeholder="Masukan Nama Obat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_obat" class="control-label">Jenis Obat</label>
                                                    <input required type="text" name="jenis_obat" class="form-control" placeholder="Masukan Jenis Obat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="stok" class="control-label">Stok</label>
                                                    <input required type="text" name="stok" class="form-control" placeholder="Masukan stok obat">
                                                </div>
                                                
                                                 <button type="submit" class="btn btn-primary" name="tambahobat">SIMPAN</button>
                                            </div>
                                           
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--akhir modal--!>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                  
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
