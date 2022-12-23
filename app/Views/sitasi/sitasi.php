<div class="content">
<div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Data Sitasi Dosen</h3>
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Masukkan ID Google Scholar Anda</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Data Sitasi</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputEmail1">ID Google Scholar</label>
                        <input type="text" class="form-control" id="gs" name="gs" placeholder="ID Google Scholar">
                      </div>
                      
                      <button class="btn btn-primary" onclick="stepper.next()" id="cari">Next</button>
                    </div>
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                      <div class="form-group" id="container">
                        <table border="1">
                          <thead>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                          </thead>
                          <tbody >
                          <td>d</td>
                          <td>d</td>
                          <td>d</td>
                          <td>d</td>
                          </tbody>
                        </table>
                      </div>
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
              </div>
            </div>
</div>
            <!-- /.card -->