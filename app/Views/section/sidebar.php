


<!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/logo/ups.png" alt="ups" height="60" width="60">
        </div>
 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
       <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i> 
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Nama Akun</span>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('logout') ?>" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> Keluar
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AKD FEB UPS</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Nama Akun</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- Profil Dosen-->
          <li class="nav-item <?php if($mainMenu == 'Dosen'){echo "menu-open";}?>">
            <a href="#" class="nav-link <?php if($mainMenu == 'Dosen'){echo "active";}?> ">
            
              <p>
                Profil Dosen
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="<?= base_url('dosen/listPendidikanDosen');?>
                " class="nav-link <?php if($parentMenu == 'riwayatPendidikanDosen'){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Riwayat Pendidikan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('dosen/listJafaDosen');?>
                " class="nav-link <?php if($parentMenu == 'riwayatJafaDosen'){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Riwayat JAFA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('dosen/listProfesiDosen');?>" class="nav-link <?php if($parentMenu == 'riwayatProfesiDosen'){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sertifikat Profesi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('dosen/listBnspDosen');?>
                " class="nav-link <?php if($parentMenu == 'riwayatBnspDosen'){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sertifikat BNSP</p>
                </a>
              </li>
              
            </ul>
          </li>

         
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <a href="#" class="d-block">Tridharma Dosen</a>
            </div>
          



          <!-- Pendidikan & Pengajaran -->
          <li class="nav-item <?php if($mainMenu == 'Pendidikan'){echo "menu-open";}?>
           ">
           
            <a href="#" class="nav-link <?php if($mainMenu == 'Pendidikan'){echo "active";}?>">
              
              <p>
              Pendidikan & Pengajaran
              
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="<?= base_url('pendidikan/rekognisiPendidikanDosen');?>" class="nav-link  <?php if($parentMenu == 'rekognisiPendidikan'){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekognisi</p>
                </a>
              </li>
              
            </ul>
          </li>

            <!-- Penelitian -->
          <li class="nav-item <?php if($mainMenu == 'Penelitian'){echo "menu-open";}?>">
            <a href="#" class="nav-link <?php if($mainMenu == 'Penelitian'){echo "active";}?> ">
            
              <p>
                Penelitian
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
              <a href="<?= base_url('penelitian/listPenelitianDosen');?>
                " class="nav-link <?php if($parentMenu == 'reportPenelitian'){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Penelitian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('penelitian/listJurnalDosen');?>
                " class="nav-link <?php if($parentMenu == 'reportJurnalPenelitian'){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jurnal</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?= base_url('penelitian/rekognisiPenelitianDosen');?>
                " class="nav-link <?php if($parentMenu == 'rekognisiPenelitian'){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekognisi</p>
                </a>
              </li>
            </ul>
          </li>
           <!-- Pengabdian -->
           <li class="nav-item <?php if($mainMenu == 'Pengabdian'){echo "menu-open";}?>">
            <a href="#" class="nav-link <?php if($mainMenu == 'Pengabdian'){echo "active";}?> ">
            
              <p>
                Pengabdian kepada Masyarakat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="<?= base_url('pengabdian/listPengabdianDosen');?>
                " class="nav-link <?php if($parentMenu == 'reportPengabdian'){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan pengabdian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pengabdian/listJurnalPengabdian');?>
                " class="nav-link <?php if($parentMenu == 'reportJurnalPengabdian'){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jurnal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pengabdian/rekognisiPengabdianDosen');?>
                " class="nav-link <?php if($parentMenu == 'rekognisiPengabdian'){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekognisi</p>
                </a>
              </li>
            </ul>
          </li>

           <!-- GOOGLE SCHOLAR -->
           <li class="nav-item <?php if($mainMenu == 'GS'){echo "menu-open";}?>">
            <a href="#" class="nav-link <?php if($mainMenu == 'GS'){echo "active";}?> ">
            
              <p>
                Google Scholar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('gs/reportSitasi');?>
                " class="nav-link  <?php if($parentMenu == 'reportSitasi'){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Sitasi Dosen</p>
                </a>
              </li>
             
              </li>
            </ul>
          </li>


        </ul>
        
        
        
        

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
 
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Aktifitas Kegiatan Dosen</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
              <li class="breadcrumb-item active"><?= esc($title); ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->