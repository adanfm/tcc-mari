<?php include 'includes/header.php'; ?>

<form class="form-horizontal">
  <!-- Nome -->
  <div class="control-group">
    <label class="control-label" for="inputNome">Nome</label>
    <div class="controls">
      <input type="text" id="inputNome" placeholder="Nome">
    </div>
  </div>
  <!-- Email -->
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <!-- Assunto -->
  <div class="control-group">
    <label class="control-label" for="inputAssunto">Assunto</label>
    <div class="controls">
      <input type="text" id="inputAssunto" placeholder="Assunto">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="textarea">  
        <textarea rows="5"></textarea>
      </label>
      
      <button type="submit" class="btn btn-warning">Enviar</button>
    </div>
  </div>
</form>

<?php include 'includes/footer.php'; ?>
