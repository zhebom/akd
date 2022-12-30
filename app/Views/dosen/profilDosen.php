<div class="container">

  <div class="register-logo">
    <a href="<?= base_url('');?>
    "><b><?= esc($title); ?></b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">  
        <strong><?= session()->getFlashdata('msg') ?></strong>
        <?= $validasi->listErrors(); ?>
      </p>
      
    
        
     <form action="<?= base_url('dosen/ubah'); ?>" method="post">
     <?php foreach ($dosen as $d): ?>
        <div class="input-group mb-3">
          
          <input type="text" id="name" name="name" class="form-control" placeholder="Nama & Gelar"  value="<?= $d->nama_dosen; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" id="nidn" name="nidn" class="form-control"  value="<?= $d->nidn_dosen; ?>" placeholder="NIDN">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" id="email" name="email" class="form-control"  value="<?= $d->email_dosen; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <a for="pass">*Diisi jika ingin rubah password</a>
        <div class="input-group mb-3">
          
          <input type="password" class="form-control"  id="pass" name="pass" placeholder="masukkan password yang baru">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" id="passconf" name="passconf">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ubah Data</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     

     
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->


</div>