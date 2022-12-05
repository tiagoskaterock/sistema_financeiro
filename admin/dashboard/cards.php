<?php 

$sql = sql("SELECT count(id) as total FROM usuarios");
$total_usuarios = $sql['total'];

?>



<!-- Small boxes (Stat box) -->
<div class="row">

  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?= $total_usuarios ?></h3>

        <p>Usuários Cadastrados</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">Veja Mais <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

</div>
<!-- /.row -->