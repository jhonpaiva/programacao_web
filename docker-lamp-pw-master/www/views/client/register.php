<h1>Cadastro de clientes</h1>
<form action="?controller=client&action=registerView" method="post">

<div>
    <div class="mb-3 mt-3">
      <label class="form-label">Nome</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label class="form-label">Email</label>
      <input type="text" class="form-control" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label class="form-label">Telefone</label>
      <input type="password" class="form-control" name="phone">
    </div>
  </div>
  <div class="mb-3 mt-3">
      <label class="form-label">Endereço</label>
      <input type="text" class="form-control" name="address">
    </div>
  
  <button type="submit">Salvar</button>
</form>