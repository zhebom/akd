<div class="content">
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title;?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('addLaporan'); ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <?= $validasi->listErrors(); ?>
                <strong><?= session()->getFlashdata('msg') ?></strong>
                <div class="form-group">
                        <label>Laporan</label>
                        <select class="form-control" id="tridharma" name="tridharma" >
                          <option value="">-- Pilih Jenis Laporan --</option>
                          
                          <option value="penelitian">Penelitian</option>
                          <option value="pengabdian">Pengabdian kepada Masyarakat</option>
                        
                        </select>
                     
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul" value="<?= old('judul'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sumber Dana</label>
                    <input type="text" class="form-control" id="sumber" name="sumber" value="<?= old('sumber'); ?>" placeholder="Didanai Oleh" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Dana </label>
                    <input type="number" class="form-control" id="dana" name="dana"  placeholder="Total Dana " value="<?= old('dana'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun"  placeholder="Pada Tahun" value="<?= old('tahun'); ?>">
                  </div>
                   
                  <div class="form-group">
                    <!-- select -->
                    
                        <label>Skala</label>
                        <select class="form-control" id="skala" name="skala">
                        <option value="">-- Pilih Skala --</option>
                          <option value="lokal">Lokal</option>
                          <option value="nasional">Nasional</option>
                          <option value="internasional">Internasional</option>
                        
                        </select>
                     
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Laporan dalam 1 File PDF</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pdfku" name="pdfku" >
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