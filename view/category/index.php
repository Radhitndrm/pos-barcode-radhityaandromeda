<?php
include_once("../../config/database.php");

session_start();

if ($_SESSION['username'] == "") {
  header('location:../index.php');
}

include_once("../inc/header.php");

?>

<?php
include_once("../inc/admin_sidebar.php");
?>

<!-- Main content -->
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col">
          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Seluruh Kategori</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">Menampilkan
              <input type="number" style="width: 70px">Data/Halaman

              <div class="float-right">Pencarian:
                <input type="text" class="float-right">
              </div>

              <table class="table table-hover text-nowrap ">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                  </tbody>
                </table>

              <div class="card-body pl-3 pr-3 pb-1">Menampilkan 1 Dari 1 Halaman
                <div class="row float-right">
                  <button type="#" class="page-link text-dark">Previous</button>
                  <button type="#" class="bg-primary page-link text-dark">1</button>
                  <button type="#" class="page-link text-dark">Next</button>
                </div>
              </div>
            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

        <!-- /.card -->

        <!--/.col (left) -->
        <!-- right column -->

        <div class="col">
          <!-- Form Element sizes -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Kategori</h3>
            </div>
            <div class="card-body">
              <label for="">Nama Kategori</label>
              <input class="form-control form-control-sm-2" type="text">
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

  </section>
</div>






  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function() {
    bsCustomFileInput.init();
  });
</script>
</body>

</html>



<?php
include_once("../inc/footer.php");
?>