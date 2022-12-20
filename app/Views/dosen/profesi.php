<div class="content">
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title;?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('dosen/addProfesiDosen'); ?>" method="post" enctype="multipart/form-data"><form >
                <div class="card-body">
                <?= $validasi->listErrors(); ?>
              <strong><?= session()->getFlashdata('msg') ?></strong>
                  <div class="form-group">
                    <label for="penyelenggara" >Penyelenggara</label>
<<<<<<< HEAD
                    <input type="text" class="form-control" id="penyelenggara" name="penyelenggara"  placeholder="Misal : BNSP, atau lainnya" value="<?= old('penyelenggara'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="kompetensi">Kompetensi / Gelar Yang Didapat</label>
                    <input type="text" class="form-control" id="kompetensi" name="kompetensi" placeholder="Kompetensi / Gelar" value="<?= old('kompetensi'); ?>">
=======
                    <input type="text" class="form-control" id="penyelenggara" name="penyelenggara"  placeholder="Misal : BNSP, atau lainnya">
                  </div>
                  <div class="form-group">
                    <label for="kompetensi">Kompetensi / Gelar Yang Didapat</label>
                    <input type="text" class="form-control" id="kompetensi" name="kompetensi"placeholder="Kompetensi / Gelar">
>>>>>>> ff1f0213dda4ca4efc656e2c44091c02124e3f59
                  </div>
                  <div class="form-group">
                    <label for="date">Berlaku Hingga</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Berlaku Hingga">
                  </div>
                                     
                  <div class="form-group">
                    <!-- select -->
                    
                        <label>Skala</label>
                        <select id="skala" name="skala" class="form-control">
                        <option value="">-- Pilih Skala Profesi --</option>  
                        <option value="nasional">Nasional</option>
                         <option value="internasional">Internasional</option>
                        
                        </select>
                     
                  </div>
                  <div class="form-group">
                    <label for="file">Upload Bukti dalam 1 File PDF</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pdfku" name="pdfku">
                        <label class="custom-file-label" for="pdfku">Choose File   </label>
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