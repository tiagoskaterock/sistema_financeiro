<?php 

include "../../helpers.php";
include "../../functions.php";
include "../includes/header.php";
include "../includes/aside.php";

$cadastros = [
	$clientes = [
		'tabela' => 'clientes',
		"titulo" => 'Clientes',
		"link"   => 'admin/cadastros/clientes',
	],
	$niveis = [
		"titulo" => 'Níveis',
		'tabela' => 'niveis',
		"link"   => 'admin/cadastros/niveis',
	],
	$usuarios = [
		"titulo" => 'Usuários',
		'tabela' => 'usuarios',
		"link"   => 'admin/cadastros/usuarios',
	],
];

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastros</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= URL ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= URL ?>admin">Admin</a></li>
              <li class="breadcrumb-item active">Cadastros</li>
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
                <h3 class="card-title">Cadastros</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Título</th>
                    <th>Total</th>
                  </tr>
                  </thead>

                  <tbody>   

                  	<?php foreach ($cadastros as $cadastro): ?>
                  		<tr>
                  			<td title="<?= $cadastro['titulo'] ?>">
                  				<a href="<?= URL ?><?= $cadastro['link'] ?>">
                  					<?= $cadastro['titulo'] ?>
                  				</a>
                  			</td>
                  			<td><?= sql_count($cadastro['tabela']) ?></td>
                  		</tr>
                  	<?php endforeach ?>
            
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


<?php include "../includes/footer.php" ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<?php 

	js(URL . "admin/plugins/jquery/jquery.min.js");
	js(URL . "admin/plugins/bootstrap/js/bootstrap.bundle.min.js");
	js(URL . "admin/plugins/datatables/jquery.dataTables.min.js");
	js(URL . "admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js");
	js(URL . "admin/plugins/datatables-responsive/js/dataTables.responsive.min.js");
	js(URL . "admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js");
	js(URL . "admin/plugins/datatables-buttons/js/dataTables.buttons.min.js");
	js(URL . "admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js");
	js(URL . "admin/plugins/jszip/jszip.min.js");
	js(URL . "admin/plugins/pdfmake/pdfmake.min.js");
	js(URL . "admin/plugins/pdfmake/vfs_fonts.js");
	js(URL . "admin/plugins/datatables-buttons/js/buttons.html5.min.js");
	js(URL . "admin/plugins/datatables-buttons/js/buttons.print.min.js");
	js(URL . "admin/plugins/datatables-buttons/js/buttons.colVis.min.js");
	js(URL . "admin/dist/js/adminlte.min.js");
	js(URL . "admin/dist/js/demo.js");

?>

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
