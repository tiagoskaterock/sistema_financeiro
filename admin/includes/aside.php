<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
  <img src="<?= logo() ?>" alt="<?= APP_NAME ?> Logo" class="brand-image img-circle elevation-3" style="opacity: .8; height: 25px">
  <span class="brand-text font-weight-light"><?= APP_NAME ?></span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="<?= avatar() ?>" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block" id="username_aside"><?= $usuario['nome'] ?></a>
      <small class="text-light" id="useremail_aside"><?= $usuario['email'] ?></small>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


      <li class="nav-item">
        <a href="#" data-toggle="modal" data-target="#myModal" class="nav-link">
          <i class="nav-icon far fa-circle text-info"></i>
          <p>Editar Dados</p>
        </a>
      </li>


      <li class="nav-item">
        <a href="<?= logout() ?>" class="nav-link">
          <i class="nav-icon far fa-circle text-info"></i>
          <p>Sair</p>
        </a>
      </li>


    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>



<!-- Ajax mostrar nome do usuário logado atualizado em tempo real -->
<script>
  setInterval(function () {
    $.ajax({url: "php/username_aside.php", 
      success: function(result){
        $("#username_aside").html(result);
      }
    });
  }, 1000);
</script>


<!-- Ajax mostrar email do usuário logado atualizado em tempo real -->
<script>
  setInterval(function () {
    $.ajax({url: "php/useremail_aside.php", 
      success: function(result){
        $("#useremail_aside").html(result);
      }
    });
  }, 1000);
</script>