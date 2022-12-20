<div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Daftar Sertifikasi BNSP</h3> -->
                <a href="<?= base_url('dosen/riwayatProfesiDosen'); ?>" type="button" class="btn btn-primary">Tambah Sertifikasi Profesi</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?= session()->getFlashdata('msg') ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kompetensi</th>
                    <th>Penyelenggara</th>
                    <th>Berlaku Hingga</th>
                    <th>Bukti</th>
<<<<<<< HEAD
                    <th>Aksi</th>
=======
                    <th>Bukti</th>
>>>>>>> ff1f0213dda4ca4efc656e2c44091c02124e3f59
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach($profesi as $p):  ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $p->kompetensi; ?>
                    </td>
                    <td><?= $p->penyelenggara; ?></td>
                    <td><?= $p->berlaku ?></td>
                    <td><a href="<?= base_url('profilDosen/'.$p->file); ?>" class="btn btn-success" target="_blank" rel="noopener noreferrer">Bukti</a></td>
                    <td>
                    <form action="<?= base_url('dosen/deleteProfesi/'.$p->id);?>"
                      
                       method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                  </tr>
                  <?php $no++; endforeach; ?>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>