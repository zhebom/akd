<div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Daftar Sertifikasi BNSP</h3> -->
                <a href="<?= base_url('dosen/riwayatPendidikanDosen'); ?>" type="button" class="btn btn-primary">Tambah Pendidikan</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?= session()->getFlashdata('msg') ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tingkat</th>
                    <th>Jurusan</th>
                    <th>Universitas</th>
                    <th>Lulus</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $id = 1;
                    
                    foreach ($query as $q){?>
                    
                  <tr>
                    <td><?= $id; ?></td>
                    <td><?= $q->tingkat; ?></td>
                    <td><?= $q->jurusan; ?></td>
                    <td><?= $q->universitas; ?></td>
                    <td><?= $q->tahun; ?></td>
                    <td><a href="<?= base_url(('profilDosen/').$q->file);?>
                    " class="btn btn-warning"> bukti </a></td>
                    <td>
                      <form action="<?= base_url('dosen/delete/'.$q->id);?>"
                      
                       method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                <?php 
              $id++;
              }?>
                  
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>