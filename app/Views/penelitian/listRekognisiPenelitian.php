<div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Daftar Sertifikasi BNSP</h3> -->
                <a href="<?= base_url('pendidikan/rekognisi'); ?>" type="button" class="btn btn-primary">Tambah Rekognisi Penelitian</a>
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
                    <td><?= $r->rekognisi; ?></td>
                    <td><?= $r->oleh; ?></td>
                    <td><?= $r->skala; ?></td>
                    <td><?= $r->tahun; ?></td>
                    <td><a class="btn btn-success" href="<?= base_url('rekognisiDosen/'.$r->file); ?>" target="_blank" >Bukti</a></td>
                    <td>
                    <form action="<?= base_url('rekognisi/deleteRekognisi/'.$r->id.'/'.$r->kd_tridharma);?>"
                      
                      method="post">
                       <input type="hidden" name="_method" value="DELETE">
                       <button type="submit" class="btn btn-danger">Delete</button>
                     </form>
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