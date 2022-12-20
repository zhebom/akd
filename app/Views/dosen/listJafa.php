<div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Daftar Sertifikasi BNSP</h3> -->
                <a href="<?= base_url('dosen/riwayatJafaDosen'); ?>" type="button" class="btn btn-primary">Tambah Jabatan Fungsional</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?= session()->getFlashdata('msg') ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    
                    
                  <tr>
                    <th>No</th>
                    <th>Jabatan Fungsional</th>
                    <th>Tahun</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  foreach($jafa as $j){
                      
                    ?>
                  <tr>
                    <td><?= $no; ?>
                    </td>
                    <td><?= $j->jafa_dosen; ?>
                    
                    </td>
                    <td><?= $j->tahun; ?></td>
                    <td><a href="<?= base_url('profilDosen/'.$j->file);?>
                    " target="_blank" rel="noopener noreferrer" class="btn btn-success">Bukti</a></td>
                    <td>
                    <form action="<?= base_url('dosen/deleteJafa/'.$j->id);?>"
                      
                      method="post">
                       <input type="hidden" name="_method" value="DELETE">
                       <button type="submit" class="btn btn-danger">Delete</button>
                     </form>

                    </td>
                  </tr>
                <?php $no++; };?>  
                </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>