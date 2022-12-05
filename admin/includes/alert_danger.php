<?php if (isset($_SESSION['alert_danger'])): ?>
  <div 
    class="alert alert-danger alert-dismissible fade show" 
    role="alert" 
    style="z-index: 100000;
    position: fixed;
    right: 100px;
    max-width: 500px;
    ">
    <?= $_SESSION['alert_danger'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>  
<?php endif ?>

<?php $_SESSION['alert_danger'] = null ?>
