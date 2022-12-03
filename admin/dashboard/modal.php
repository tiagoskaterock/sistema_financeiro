<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Editar Dados</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form method="post" action="#">

         <div class="form-group">
           <label for="nome">Nome</label>
           <input type="text" class="form-control" name="nome" aria-describedby="Nome" placeholder="Nome" value="<?= $usuario['nome'] ?>">
         </div>

         <div class="form-group">
           <label for="email">Email</label>
           <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $usuario['email'] ?>">
         </div>

         <div class="form-group">
           <label for="senha">Senha</label>
           <input type="password" class="form-control" name="senha" placeholder="******">
         </div>

         <button type="submit" class="btn btn-primary">Salvar</button>
       </form>
           
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>