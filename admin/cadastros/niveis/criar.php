<?php 

include "../../../helpers.php";
include "../../../functions.php";
include "../../includes/header.php";
include "../../includes/aside.php";

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Criar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= URL ?>/admin">Home</a></li>
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
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Níveis</h3>
              </div>
              <!-- /.card-header -->


              <!-- form start -->
              <form method="post" action="new.php">
                <?php include('form.php') ?>
              </form>


            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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

<?php 

	js(URL . "/admin/plugins/jquery/jquery.min.js");
	js(URL . "/admin/plugins/bootstrap/js/bootstrap.bundle.min.js");
	js(URL . "/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js");
	js(URL . "/admin/dist/js/adminlte.min.js");
	js(URL . "/admin/dist/js/demo.js");

?>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>