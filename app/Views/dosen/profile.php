<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title><?= $title ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets'); ?>/css/styles.css" rel="stylesheet" />
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/adminlte.min.css">
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!">FEB UPS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= base_url('home'); ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('login'); ?>">Login</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">

 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
          <?php foreach ($dosen as $d): ?>
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
              
              
                <h3 class="profile-username text-center"><?= $d->nama_dosen; ?></h3>

                <p class="text-muted text-center">NIDN. <?= $d->nidn_dosen; ?></p>
                <?php endforeach; ?>


                
               
                <!-- Pendidikan -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Pendidikan</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <?php foreach ($pendidikan as $pdd): ?>
                    <strong><i class="fas fa-book mr-1"></i><?= $pdd->tingkat; ?></strong>

                    <p class="text-muted">
                      Jurusan <?= $pdd->jurusan; ?> di <?= $pdd->universitas ?> pada tahun <?= $pdd->tahun; ?>
                    </p>

                    <hr>
                    <?php endforeach; ?>
                  </div>
                  <!-- /.card-body -->
                </div>
                  <!-- End Pendidikan -->

                  <!-- Jabatan Fungsional -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Jabatan Fungsional</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <?php foreach ($jafa as $pdd): ?>
                    <strong><i class="fas fa-book mr-1"></i>
                    <?php 
                      switch ( $pdd->jafa_dosen) {
                        case "GB":
                          echo "Guru Besar";
                          break;

                          case "LK":
                            echo "Lektor Kepala";
                            break;

                            case "L":
                              echo "Lektor";
                              break;

                              case "AA":
                                echo "Asisten Ahli";
                                break;
                        default:
                          "code to be executed if n is different from all labels;";
                      }
                      
                      
                      ?></strong>

                    <p class="text-muted">
                      Pada tahun <?= $pdd->tahun; ?> telah diterbitkan SK jabatan fungsional <?= $pdd->jafa_dosen; ?> sebagai berikut <a href="<?= base_url('profilDosen/'.$pdd->file); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Lihat</a>
                    </p>

                    <hr>
                    <?php endforeach; ?>
                  </div>
                  <!-- /.card-body -->
                </div>
                  <!-- End Pendidikan -->

                  <!-- Profesi -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Sertifikasi Kompetensi / Profesi</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <?php foreach ($profesi as $pdd): ?>
                    <strong><i class="fas fa-book mr-1"></i>
                    <?= $pdd->kompetensi; ?></strong>

                    <p class="text-muted">
                     Kompetensi Profesi <?= $pdd->kompetensi; ?> diselenggarakan oleh <?= $pdd->penyelenggara; ?> yang berlaku hingga <?= $pdd->berlaku; ?> <a href="<?= base_url('profilDosen/'.$pdd->file); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Lihat</a>
                    </p>

                    <hr>
                    <?php endforeach; ?>
                  </div>
                  <!-- /.card-body -->
                </div>
                  <!-- End Pendidikan -->

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">

          <div class="card card-danger">
                  <div class="card-header">
                    <h3 class="card-title">Penelitian dan Pengabdian </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <?php 
                  $no = 1;
                  foreach ($laporan as $pdd): ?>
                    <strong><b><?= $no; ?>. </b>
                    <?= $pdd->kd_tridharma; ?> - <?= $pdd->judul; ?> - <a href="<?= base_url('laporanDosen/'.$pdd->file); ?> " target="_blank" rel="noopener noreferrer" class="btn btn-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Lihat</a></strong>
                    
                    <p class="text-muted">
                     Laporan <?= $pdd->kd_tridharma; ?> telah dilaksanakan pada <?= $pdd->tahun; ?> 
                    </p>

                    <hr>
                    <?php $no++; endforeach; ?>
                  </div>
                  <!-- /.card-body -->
                </div>
                  <!-- End Pendidikan -->
                     <!-- Profesi -->
                <div class="card card-danger">
                  <div class="card-header">
                    <h3 class="card-title">Daftar Luaran </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <?php 
                  $no = 1;
                  foreach ($luaran as $pdd): ?>
                    <strong><b><?= $no; ?>. </b>
                    <?= $pdd->kd_tridharma; ?> - <?= $pdd->skala; ?> - <a href="<?= base_url('luaranDosen/'.$pdd->file); ?> " target="_blank" rel="noopener noreferrer" class="btn btn-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Lihat</a></strong>
                    <a href="<?= $pdd->link; ?> " target="_blank" rel="noopener noreferrer" class="btn btn-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Link</a></strong>
                    
                    
                    <p class="text-muted">
                     Luaran dengan judul <?= $pdd->judul; ?> didanai oleh <?= $pdd->sumber; ?> pada <?= $pdd->tahun; ?> 
                    </p>

                    <hr>
                    <?php $no++; endforeach; ?>
                  </div>
                  <!-- /.card-body -->
                </div>
                  <!-- End Pendidikan -->


                  <div class="card card-danger">
                  <div class="card-header">
                    <h3 class="card-title">Daftar Rekognisi </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <?php 
                  $no = 1;
                  foreach ($rekognisi as $pdd): ?>
                    <strong><b><?= $no; ?>. </b>
                    <?= $pdd->kd_tridharma; ?> - <?= $pdd->skala; ?> - <a href="<?= base_url('rekognisiDosen/'.$pdd->file); ?> " target="_blank" rel="noopener noreferrer" class="btn btn-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Lihat</a></strong>
                    
                    <p class="text-muted">
                     Rekognisi <?= $pdd->kd_tridharma; ?> sebagai <?= $pdd->oleh; ?> pada <?= $pdd->tahun; ?> 
                    </p>

                    <hr>
                    <?php $no++; endforeach; ?>
                  </div>
                  <!-- /.card-body -->
                </div>
                  <!-- End Pendidikan -->



                 

                  
            <!-- /.card -->
          </div>

          
          <!-- /.col -->
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->

      
    </section>
    <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
  <!-- Footer-->
  <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Fakultas Ekonomi dan Bisnis Universitas Pancasakti Tegal</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url('assets'); ?>js/scripts.js"></script>
    </body>
</html>

