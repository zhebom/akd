<div class="content">
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title;?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('addLuaran'); ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <?= $validasi->listErrors(); ?>
                <strong><?= session()->getFlashdata('msg') ?></strong>
                
                <div class="form-group">
                        <label>Tridharma</label>
                        <select class="form-control" id="tridharma" name="tridharma" >
                          <option value="">-- Pilih Jenis --</option>
                          
                          <option value="penelitian">Penelitian</option>
                          <option value="pengabdian">Pengabdian kepada Masyarakat</option>
                        
                        </select>
                     
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Luaran</label>
                    <input type="text" class="form-control" placeholder="Masukkan Judul Luaran Penelitian" id="judul" name="judul">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Link Luaran</label>
                    <input type="text" class="form-control"  placeholder="Masukkan Link Luaran / - (jika tidak ada)" id="link" name="link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sumber Dana</label>
                    <input type="text" class="form-control"  placeholder="Didanai Oleh" id="sumber" name="sumber">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Dana </label>
                    <input type="number" class="form-control"  placeholder="Total Dana " id="dana" name="dana">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="number" class="form-control"  placeholder="Pada Tahun" id="tahun" name="tahun">
                  </div>
                   
                  <div class="form-group">
                    <!-- select -->
                    
                        <label>Kategori</label>
                        <select class="form-control" id="skala" name="skala">
                          
                         <option value="">-- Pilih Kategori --</option>
                          
						  <?php foreach($dl as $d):?>
						  
						  <option value="<?= $d->nama_luaran;?>"><?= $d->nama_luaran; ?></option>
						  <?php endforeach; ?>

                        
                        </select>
                     
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Luaran dalam 1 File PDF</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pdfku" name="pdfku">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
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