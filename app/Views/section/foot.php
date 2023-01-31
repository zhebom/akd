</div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; Fakultas Ekonomi & Bisnis Universitas Pancasakti Tegal</strong>
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
  
  
  
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/plugins/sparklines/sparkline.js'); ?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.js'); ?>"></script>
<!-- BS-Stepper -->
<script src="<?= base_url('assets/plugins/bs-stepper/js/bs-stepper.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ;?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<script>
      var gsid = document.getElementById('gs');
      var cari = document.getElementById('cari');
      var container = document.getElementById('container');
      var xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function(){
          if (xhr.readyState == 4 && xhr.status == 200){
            addGS();
            container.innerHTML = xhr.responseText;
          }
        }
        xhr.open('GET', '<?= base_url('/assets/gs/googlescholar.php?user='); ?>'+gsid.value, true);
          xhr.send();


</script>


<script>
var gsid = document.getElementById('gs');
      var cari = document.getElementById('cari');
      var container = document.getElementById('container');

      cari.addEventListener('click', 
      function (){
        
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
          if (xhr.readyState == 4 && xhr.status == 200){
            addGS();
            container.innerHTML = xhr.responseText;
          }
        }

          xhr.open('GET', '<?= base_url('/assets/gs/googlescholar.php?user='); ?>'+gsid.value, true);
          xhr.send();

      }
      );
      function addGS(){
        console.log(gs.value);
          //var gs = document.getElementById('gs');
          var xhr = new XMLHttpRequest();
          // xhr.onreadystatechange = function(){
          //   if (xhr.readyState == 4 && xhr.status == 200){

          xhr.open('GET', '<?= base_url('/gs/addGS/').'/'; ?>'+gs.value, true);
          xhr.send();

      //       }
      //     }
      }
</script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })
</script>

</body>
</html>
