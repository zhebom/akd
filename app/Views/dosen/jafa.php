<div class="content">
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title;?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="<?= base_url('dosen/addJafaDosen'); ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <?= $validasi->listErrors(); ?>
                <strong><?= session()->getFlashdata('msg') ?></strong>
                <div class="form-group">
                    <!-- select -->
                    
                        <label>Jabatan Fungsional</label>
                        <select class="form-control" id="jafa" name="jafa">
                        <option value="">-- Pilih Jabatan Fungsional --</option>
                          <option value="AA">Asisten Ahli</option>
                          <option value="L">Lektor</option>
                          <option value="LK">Lektor Kepala</option>
                          <option value="GB">Guru Besar</option>                       
                        </select>
                     
                  </div>
                 
                  <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Pada Tahun">
                  </div>
                   
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Bukti dalam 1 File PDF</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pdfku" name="pdfku">
                        <label class="custom-file-label" for="pdfku" >Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
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