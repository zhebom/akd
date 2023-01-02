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
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Lihat Profil</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach($dosen as $r): ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $r->nidn_dosen; ?>
                    </td>
                    <td><?= $r->nama_dosen; ?></td>
                    <td><?= $r->email_dosen; ?></td>
                    
                    
                    <td><a class="btn btn-success"href="<?= base_url('admin/dosen/'.$r->id_dosen) ?>" target="_blank" rel="noopener noreferrer">Lihat Profil</a></td>
                    <td>
                    <form action="#"
                      
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