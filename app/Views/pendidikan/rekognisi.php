<div class="content">
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title;?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('rekognisi/addRekognisiDosen'); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                    <!-- select -->

                <div class="card-body">
                   <?= $validasi->listErrors(); ?>
                <strong><?= session()->getFlashdata('msg') ?></strong>
                
                <div class="form-group">
                        <label>Tridharma</label>
                        <select class="form-control" id="tridharma" name="tridharma" >
                          <option value="">-- Pilih Jenis --</option>
                          <option value="pendidikan">Pendidikan & Pengajaran</option>
                          <option value="penelitian">Penelitian</option>
                          <option value="pengabdian">Pengabdian kepada Masyarakat</option>
                        
                        </select>
                     
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Rekognisi Sebagai</label>
                    <input type="text" class="form-control" id="rekognisi" name="rekognisi" placeholder="Misal. Narasumber / Visiting Lecturer dll .." value="<?= old('rekognisi'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Diundang oleh</label>
                    <input type="text" class="form-control" id="oleh" name="oleh" placeholder="Diundang oleh" value="<?= old('oleh'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Pada Tahun" value="<?= old('tahun'); ?>">
                  </div>
                   
                  <div class="form-group">
                    <!-- select -->
                    
                        <label>Skala Rekognisi</label>
                        <select class="form-control" id="skala" name="skala">
                          <option value="">-- Pilih Skala Rekognisi --</option>
                          <option value="lokal">Lokal</option>
                          <option value="nasional">Nasional</option>
                          <option value="internasional">Internasional</option>
                        
                        </select>
                     
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Bukti dalam 1 File PDF</label>
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