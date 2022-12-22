<div class="content">
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title;?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="form-group">
                        <label>Tridharma</label>
                        <select class="form-control" id="tridharma" name="tridharma" >
                          <option value="">-- Pilih Jenis --</option>
                          
                          <option value="penelitian">Penelitian</option>
                          <option value="pengabdian">Pengabdian kepada Masyarakat</option>
                        
                        </select>
                     
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Luaran Penelitian</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Luaran Penelitian">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Link Luaran Penelitian</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Link Luaran Penelitian">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sumber Dana</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Didanai Oleh">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Dana </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Total Dana Penelitian">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pada Tahun">
                  </div>
                   
                  <div class="form-group">
                    <!-- select -->
                    
                        <label>Skala</label>
                        <select class="form-control">
                          <option>Jurnal Nasional</option>
                          <option>Jurnal Nasional Terakreditasi</option>
                          <option>Jurnal Internasional</option>
                          <option>Jurnal Internasional Bereputasi</option>
                          <option>Seminar Nasional</option>
                          <option>Seminar Internasional</option>
                        
                        </select>
                     
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Luaran dalam 1 File PDF</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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