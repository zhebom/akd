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
                        <label>Luaran</label>
                        <select class="form-control" id="tridharma" name="tridharma" >
                          <option value="">-- Pilih Jenis Luaran --</option>
                          
                          <option value="penelitian">Penelitian</option>
                          <option value="pengabdian">Pengabdian kepada Masyarakat</option>
                        
                        </select>
                     
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Luaran Penelitian</label>
                    <input type="text" class="form-control" id="judul"  name="judul" placeholder="Masukkan Judul Luaran Penelitian" value="<?= old('judul'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Link Luaran Penelitian</label>
                    <input type="text" class="form-control" id="link"  name="link" placeholder="Masukkan Link Luaran Penelitian" value="<?= old('link'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sumber Dana</label>
                    <input type="text" class="form-control" id="sumber"  name="sumber" placeholder="Didanai Oleh" value="<?= old('sumber'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Dana </label>
                    <input type="number" class="form-control" id="dana"  name="dana" placeholder="Total Dana Penelitian" value="<?= old('dana'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="text" class="form-control" id="tahun"  name="tahun"  placeholder="Pada Tahun" value="<?= old('tahun'); ?>">
                  </div>
                   
                  <div class="form-group">
                    <!-- select -->
                    
                        <label>Kategori</label>
                        <select class="form-control" id="skala" name="skala">
                        <option value="">-- Pilih Kategori Luaran --</option>
                          <option value="jurnal nasional">Jurnal Nasional</option>
                          <option value="jurnal nasional terakreditasi">Jurnal Nasional Terakreditasi</option>
                          <option value="jurnal internasional">Jurnal Internasional</option>
                          <option value="jurnal internasional bereputasi">Jurnal Internasional Bereputasi</option>
                          <option value="seminar nasional">Seminar Nasional</option>
                          <option value="seminar internasional">Seminar Internasional</option>
                        
                        </select>
                     
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Luaran dalam 1 File PDF</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pdfku"  name="pdfku" >
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