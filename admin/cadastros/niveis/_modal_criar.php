<!-- The Modal -->
<form method="post" action="_new.php">
  <div class="modal fade" id="modal_novo">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Criar Nível</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <label for="titulo">Título</label>
            <input 
              type="text" 
              class="form-control" 
              name="titulo" 
              placeholder="Título" 
              title="Título"
              value="<?= isset($nivel) ? $nivel['titulo'] : null ?>" 
            >

            <input type="hidden" name="id" value="<?= isset($nivel) ? $nivel['id'] : null ?>">
        </div>

        <div class="modal-footer">
          <button class="btn btn-sm btn-success" type="submit">Salvar</button>
        </div>

      </div>
    </div>
  </div>
</form>