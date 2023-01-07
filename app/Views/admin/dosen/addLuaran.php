<div class="content">
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title;?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              <form action="<?= base_url('/admin/dosen/saveluaran'); ?>" method="post" >
              
              <div class="card-body">
              <?= $validasi->listErrors(); ?>
              <strong><?= session()->getFlashdata('msg') ?></strong>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Luaran</label>
                    <input type="text" class="form-control" id="luaran" name="luaran" placeholder="Luaran" >
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>