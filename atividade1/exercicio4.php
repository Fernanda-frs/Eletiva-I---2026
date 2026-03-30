<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Novo Usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  
    .btn-enviar { background-color: #78b17d; border-color: #78b17d; color: white; }
    .btn-enviar:hover { background-color: #669a6a; }
    h1 { font-weight: 400; color: #333; margin-bottom: 30px; }
    label { font-weight: bold; font-size: 0.9rem; }
  </style>
</head>
<body> 

<div class="container py-5">
  <h1>Novo Usuário</h1>
 

  <form method="post">
    <div class="row mb-3">
      <div class="col-12">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Informe o nome..." required>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-3">
        <label for="cpf" class="form-label">CPF:</label>
        <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Informe o cpf..." required>
      </div>
      <div class="col-md-7">
        <label for="endereco" class="form-label">Endereço:</label>
        <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Informe o endereço..." required>
      </div>
      <div class="col-md-2">
        <label for="nivel" class="form-label">Nível:</label>
        <select id="nivel" name="nivel" class="form-select" required>
          <option selected disabled>---</option>
          <option value="1">Nível 1</option>
        </select>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-md-6">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Informe o email..." required>
      </div>
      <div class="col-md-4">
        <label for="senha" class="form-label">Senha:</label>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Informe a senha..." required>
      </div>
      <div class="col-md-2">
        <label for="status" class="form-label">Status:</label>
        <select id="status" name="status" class="form-select" required>
          <option selected disabled>---</option>
          <option value="ativo">Ativo</option>
        </select>
      </div>
    </div>

    <div class="d-flex justify-content-end gap-2">
      <button type="submit" class="btn btn-enviar">Enviar</button>
      <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>