<?php 

include "../../../helpers.php";
include "../../../functions.php";
include "../../includes/header.php";
include "../../includes/aside.php";

$niveis = mysqli_query($conn, "SELECT * FROM niveis");

?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Níveis</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= URL ?>/admin">Dashboard</a></li>
              <li class="breadcrumb-item active">Níveis</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Níveis de usuários</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Título</th>
                  </tr>
                  </thead>

                  <tbody>   

                  <?php 

                    while($row = $niveis->fetch_assoc()) {
                      ?>
                      <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['titulo'] ?></td>
                      </tr>
                      <?php
                    }

                  ?>             
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php include "../../includes/footer.php" ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= URL ?>/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= URL ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= URL ?>/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= URL ?>/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= URL ?>/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= URL ?>/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= URL ?>/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= URL ?>/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= URL ?>/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?= URL ?>/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= URL ?>/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= URL ?>/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= URL ?>/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= URL ?>/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= URL ?>/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= URL ?>/admin/dist/js/demo.js"></script>
<!-- Page specific script -->
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
</script>
</body>
</html>
