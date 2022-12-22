<div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Daftar Sertifikasi BNSP</h3> -->
                <a href="<?= base_url('pendidikan/rekognisi'); ?>" type="button" class="btn btn-primary">Tambah Rekognisi Pendidikan</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?= $validasi->listErrors(); ?>
              <strong><?= session()->getFlashdata('msg') ?></strong>
            
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tridharma</th>
                    <th>Rekognisi</th>
                    <th>Oleh</th>
                    <th>Skala</th>
                    <th>Tahun</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach($rekognisi as $r): ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $r->kd_tridharma; ?>
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                  </tr>
                 <?php 
                $no++;
                endforeach; ?>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>