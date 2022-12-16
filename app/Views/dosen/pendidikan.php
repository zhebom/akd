<div class="content">
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title;?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              <form action="<?= base_url('dosen/addPendidikanDosen'); ?>" method="post" enctype="multipart/form-data">
              
              <div class="card-body">
              <?= $validasi->listErrors(); ?>
              <strong><?= session()->getFlashdata('msg') ?></strong>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pendidikan</label>
                    <select id="tingkat" name="tingkat" class="form-control">
                          <option value="S1">SARJANA</option>
                          <option value="S2">MAGISTER</option>
                          <option value="S3">DOKTORAL</option>
                        
                        </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" value="<?= old('tempat'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat</label>
                    <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Universitas" value="<?= old('tempat'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Lulus</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Pada Tahun" value="<?= old('tahun'); ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="pdfku">Upload Ijazah & Transkrip dalam 1 File PDF</label>
                   
                      <div class="custom-file">
                        <input type="file" class="custom-file-input " id="pdfku" name="pdfku">
                       
                        <label class="custom-file-label" for="pdfku">Choose file</label>
                     
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