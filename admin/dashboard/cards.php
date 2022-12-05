<?php 

$sql = sql("SELECT count(id) as total FROM usuarios");
$total_usuarios = $sql['total'];

$sql = sql("SELECT count(id) as total FROM niveis");
$total_niveis = $sql['total'];

?>



<!-- Small boxes (Stat box) -->
<div class="row">

  <!-- Usuários -->
  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3 id="total_usuarios"><?= $total_usuarios ?></h3>

        <p>Usuários Cadastrados</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">Veja Mais <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  

  <!-- Níveis -->
  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3 id="total_niveis"><?= $total_niveis ?></h3>

        <p>Níveis</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

</div>
<!-- /.row -->


<!-- Ajax para mostrar total de usuários em tempo real -->
<script>
  setInterval(function () {
    $.ajax({url: "php/total_usuarios.php", 
      success: function(result){
        $("#total_usuarios").html(result);
      }
    });
  }, 1000);
</script>


<!-- Ajax para mostrar total de níveis em tempo real -->
<script>
  setInterval(function () {
    $.ajax({url: "php/total_niveis.php", 
      success: function(result){
        $("#total_niveis").html(result);
      }
    });
  }, 1000);
</script>