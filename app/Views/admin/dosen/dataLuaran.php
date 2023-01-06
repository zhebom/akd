          <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Daftar Sertifikasi BNSP</h3> -->
                <a href="<?= base_url('admin/dosen/addluaran'); ?>" type="button" class="btn btn-primary">Tambah Data Luaran</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?= $validasi->listErrors(); ?>
              <strong><?= session()->getFlashdata('msg') ?></strong>
            
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th colspan="2" >Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($dosen as $d): ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $d->nama_luaran ?></td>
                   
                    <td>
                    <form action="<?= base_url('admin/dosen/luaran/del/'.$d->id); ?>"
                      
                      method="post">
                       <input type="hidden" name="_method" value="DELETE">
                       <button type="submit" class="btn btn-danger">Delete</button>
                     </form>
                    </td>
                  </tr>
                  
                
                  <?php  $no++; endforeach; ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>