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
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Pusat Data Dosen FEB UPS</h1>
                        <p class="fs-4">Profil dosen berdasarkan kontribusi pendidikan dan pengajaran, penelitian, pengabdian kepada masyarkat yang ditampilkan melalui website sebagai Pusat Data yang dimiliki oleh Fakultas Ekonomi dan Bisnis Universitas Pancasakti Tegal</p>
                        <a class="btn btn-primary btn-lg" href="<?= site_url('login'); ?>">Login sebagai Dosen</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="card-group" >
               
                <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php foreach ($dosen as $d): ?>
                    <div class="col">
                        <div class="card mt-1 mb-1">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= $d->nama_dosen; ?></h5>
                            
                            <a href="<?= base_url('dosen/profil/'.$d->id_dosen); ?>" class="btn btn-primary">Lihat Profil Dosen</a>
                        </div>
                    

                        </div>
                    
                    </div>
                   
                <?php endforeach; ?>
                  
                    </div>
                 
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
        <script src="js/scripts.js"></script>
    </body>
</html>
