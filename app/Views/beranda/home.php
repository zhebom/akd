<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title><?= $title ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/assets/favicon.ico');?>" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/css/styles.css'); ?>" rel="stylesheet" />
		<!-- Google Font: Source Sans Pro -->
		  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="<?=base_url('assets/dist/css/adminlte.min.css');?>">
		   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);
      
      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        
        var data = google.visualization.arrayToDataTable([
          
         
		
		
          // buat header kolum
		 
		 
		 //buat isi kolom
		 <?php
     if ($dl){
      echo "['tahun','total'],";
		 foreach ($dl as $d):
		 echo "['".$d->tahun."',";

		 echo $d->cs."],";
		
		 endforeach;
    } 
		 ?>
    
    
		
     
    
     
//['2020',1,2],
			
		
        ]);

        var options = {
           title: 'Luaran Dosen',
          curveType: 'function',
          legend: { position: 'bottom'}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="<?= base_url(); ?>">FEB UPS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('login'); ?>">Login</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Pusat Data & Informasi Dosen FEB UPS</h1>
                        <p class="fs-4">Profil dosen berdasarkan kontribusi pendidikan dan pengajaran, penelitian, pengabdian kepada masyarakat yang ditampilkan melalui website sebagai Pusat Data yang dimiliki oleh Fakultas Ekonomi dan Bisnis Universitas Pancasakti Tegal</p>
                        
                        <a class="btn btn-primary btn-lg" href="<?= site_url('login'); ?>">Login sebagai Dosen</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
			<div class="container px-lg-5">
		
	
			
			
				<!-- BAR CHART  -->
				
            <div class="card card-success">
              <div class="card-header">
			  
			 
			
                <h3 class="card-title">Grafik Luaran</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
             
               <?php if ($dl){
                ?>
 <div id="chart_div"></div>
               <?php } else {

                echo " <strong>Data belum ada didatabase</strong> ";
               }?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
			</div>
			
            <div class="container px-lg-5">
               
                <!-- Page Features-->
                
          
                    
                
                    <div class="row">
                        
                       
                        
                          <?php foreach ($dosen as $d): ?>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card">
                            <div class="card-body">
                              <h5 class="card-title"><?= $d->nama_dosen; ?></h5>
                              <p class="card-text">NIDN.<?= $d->nidn_dosen; ?></p>
                              <a href="<?= base_url('dosen/profil/'.$d->id_dosen); ?>" class="btn btn-primary">Lihat Profil Dosen</a>
                            </div>
                          
                            </div>      
                            </div>  
                          <?php endforeach; ?> 
                        
                       
                    </div>
                 
                </div>
            
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Fakultas Ekonomi dan Bisnis Universitas Pancasakti Tegal</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url('assets/js/scripts.js');?>"></script>
<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/plugins/chart.js/Chart.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.min.js');?>"></script>

<!-- Page specific script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
    </body>
</html>
