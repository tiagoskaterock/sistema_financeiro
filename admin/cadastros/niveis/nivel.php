<?php 

define("PAGE_TITLE", 'Visualizar');
include "../../../helpers.php";
include "../../../functions.php";
include "../../includes/header.php";
include "../../includes/aside.php";
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

$nivel = sql("SELECT * FROM niveis WHERE id = '$id'");

$nivel_id = $nivel['id'];

$total = sql("SELECT count(id) as total FROM usuarios WHERE nivel_id = '$nivel_id'");

$total_usuarios = $total['total'];

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo PAGE_TITLE ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= URL ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= URL ?>admin">Admin</a></li>
              <li class="breadcrumb-item active"><a href="<?= URL ?>admin/cadastros">Cadastros</a></li>
              <li class="breadcrumb-item active"><a href="<?= URL ?>admin/cadastros/niveis">Níveis</a></li>
              <li class="breadcrumb-item active"><?= $nivel['titulo'] ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Níveis</h3>
        </div>
        <div class="card-body">
          <p><label>Título:</label> <?= $nivel['titulo'] ?></p>
          <p><label>Total de usuários:</label> <?= $total_usuarios ?></p>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <?php btn_editar_text(URL . 'admin/cadastros/niveis/editar?id=' . $nivel['id']) ?>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>

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