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
       <form method="post" action="php/editar-perfil.php" id="form-perfil">

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

         <div id="mensagem-perfil" class="text-center"><small></small></div>

         <button type="submit" class="btn btn-primary">Salvar</button>
       </form>
           
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button id="btn-fechar-perfil" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>





<!-- Ajax para inserir ou editar dados -->
<script>
  $("#form-perfil").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);

    $.ajax({
      url: "php/editar-perfil.php",
      type: 'POST',
      data: formData,

      success: function (mensagem) {

        $('#mensagem-perfil').removeClass()

        if (mensagem.trim() == "Salvo com Sucesso!") {
          //$('#nome').val('');
          //$('#cpf').val('');
          $('#btn-fechar-perfil').click();
          window.location = "index.php?";

        } 
        else {
          $('#mensagem-perfil').addClass('text-danger')
        }

        $('#mensagem-perfil').text(mensagem)

      },

      cache: false,
      contentType: false,
      processData: false,
        
    });

  });
</script>