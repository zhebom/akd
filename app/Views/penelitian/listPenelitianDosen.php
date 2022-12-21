<div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Daftar Sertifikasi BNSP</h3> -->
                <a href="<?= base_url('penelitian/reportPenelitian'); ?>" type="button" class="btn btn-primary">Tambah Laporan Penelitian</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?= session()->getFlashdata('msg') ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tridharma</th>
                    <th>Judul Laporan</th>
                    <th>Sumber Dana</th>
                    <th>Jumlah Dana(Rp)</th>
                    <th>Skala</th>
                    <th>Tahun</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  foreach ($laporan as $l):?>
                  
                  
                  <tr>
                    <td><?= $no; ?>
                    </td>
                    <td><?= $l->kd_tridharma; ?>
                    
                    </td>
                    <td><?= $l->judul; ?>
                    </td>
                    <td><?= $l->sumber; ?>
                    </td>
                    <td><?= number_format($l->dana); ?>
                    </td>
                    <td><?= $l->skala; ?>
                    </td>
                    <td><?= $l->tahun; ?>
                    </td>
                    <td><a href="<?= base_url('laporanDosen/'.$l->file);?>
                    " target="_blank" rel="noopener noreferrer" class="btn btn-success">Bukti</a>
                    </td>
                    <td>
                    <form action="<?= base_url('deleteLaporan/'.$l->id.'/'.$l->kd_tridharma);?>"
                      
                      method="post">
                       <input type="hidden" name="_method" value="DELETE">
                       <button type="submit" class="btn btn-danger">Delete</button>
                     </form>
  

                    </td>
                  </tr>
                  <?php 
                  
                  $no++;
                endforeach;?>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>