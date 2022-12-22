<div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Daftar Sertifikasi BNSP</h3> -->
                <a href="<?= base_url('penelitian/reportJurnal'); ?>" type="button" class="btn btn-primary">Tambah Jurnal Penelitian</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?= session()->getFlashdata('msg') ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tridharma</th>
                    <th>Judul Luaran</th>
                    <th>Link Luaran</th>
                    <th>Sumber Dana</th>
                    <th>Dana</th>
                    <th>Kategori</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php 
                    $no = 1;
                    foreach($luaran as $l) : ?>
                    <td><?= $no; ?></td>
                    <td><?= $l->kd_tridharma; ?>
                    </td>
                    <td><?= $l->judul; ?></td>
                    <td><?= $l->link; ?></td>
                    <td><?= $l->sumber; ?></td>
                    <td><?= number_format($l->dana); ?></td>
                    <td><?= $l->skala; ?></td>
                    <td><a href="<?= base_url('luaranDosen/'.$l->file); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success">Bukti</a></td>
                    <td>
                    
                    <form action="<?= base_url('deleteLuaran/'.$l->id.'/'.$l->kd_tridharma);?>"
                      
                      method="post">
                       <input type="hidden" name="_method" value="DELETE">
                       <button type="submit" class="btn btn-danger">Delete</button>
                     </form>
  

                    </td>
                  </tr>
                  
                  <?php $no++; endforeach;?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>