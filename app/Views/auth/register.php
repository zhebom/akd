
<div class="container">
  <div class="register-logo">
    <a href="<?= base_url('');?>
    "><b>Pendaftaran Dosen Baru</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">  
        <strong><?= session()->getFlashdata('msg') ?></strong>
        <?= $validasi->listErrors(); ?>
      </p>
      
    
        
     <form action="<?= base_url('addDosen'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" id="name" name="name" class="form-control" placeholder="Full name" autofocus value="<?= old('name'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" id="nidn" name="nidn" class="form-control" placeholder="Boleh Dikosongkan " autofocus value="<?= old('nidn'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" autofocus value="<?= old('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="pass" name="pass">
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
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->


