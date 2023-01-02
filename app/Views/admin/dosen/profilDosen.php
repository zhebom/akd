
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
              
              
                <h3 class="profile-username text-center"><strong><?= $d->nama_dosen; ?></h3>
                </strong>
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
                      Program Studi <?= $pdd->jurusan; ?> di <?= $pdd->universitas ?> pada tahun <?= $pdd->tahun; ?>
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
                     Kompetensi Profesi <?= $pdd->kompetensi; ?> diselenggarakan oleh <?= $pdd->penyelenggara; ?> yang diakui secara <strong><?= $pdd->skala; ?> </strong>  dan berlaku hingga <?= $pdd->berlaku; ?> <a href="<?= base_url('profilDosen/'.$pdd->file); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Lihat</a>
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
                    <h3 class="card-title">Sitasi Dosen</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <?php foreach ($gs as $g): ?>
                     
                      <input type="hidden" name="gs" id="gs" value="<?= $g->gs_dosen; ?>">
                      
                    <?php endforeach; ?>
                    <div id="container">
                     
                    </table>
                    </div>
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
                    <a href="<?php if( $pdd->link == "-"){echo "#";}else {echo $pdd->link;
                    echo 'target="_blank"';} ?> "  rel="noopener noreferrer" class="btn btn-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Link</a></strong>
                    
                    
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
                     Rekognisi <?= $pdd->kd_tridharma; ?> sebagai <?= $pdd->rekognisi; ?> pada tahun <?= $pdd->tahun; ?> oleh <?= $pdd->oleh; ?>
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
 
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url('assets'); ?>/js/scripts.js"></script>
        <script>
      
                    console.log(gs.value);
      var container = document.getElementById('container');
      var xhr = new XMLHttpRequest();

      xhr.onload = function(){
          if (xhr.readyState == 4 && xhr.status == 200){
           console.log(xhr.responseText)
            container.innerHTML = xhr.responseText;
          }
        }
        xhr.open('GET', '<?= base_url('assets'); ?>/gs/googlescholarhome.php?user='+gs.value, true);
          xhr.send();

         
</script>


