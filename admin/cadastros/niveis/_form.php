<div class="form-group">
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