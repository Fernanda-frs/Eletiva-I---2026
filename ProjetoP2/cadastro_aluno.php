<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow">
        <div class="card-body">
          <h4 class="text-center mb-4">Cadastro</h4>

          <form>
            <div class="mb-3">
              <label class="form-label">Nome</label>
              <input type="text" class="form-control" placeholder="Digite seu nome" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" placeholder="Digite seu email" required>
            </div>

            <div class="mb-3">
              <label class="form-label">CPF</label>
              <input type="text" class="form-control" placeholder="000.000.000-00" required>
            </div>

            <div class="mb-3">
              <label class="form-label">RG</label>
              <input type="text" class="form-control" placeholder="Digite seu RG" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Telefone</label>
              <input type="tel" class="form-control" placeholder="(00) 00000-0000" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Data de Nascimento</label>
              <input type="date" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Senha</label>
              <input type="password" class="form-control" placeholder="Crie uma senha" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Cadastrar</button>
          </form>

          <div class="text-center mt-3">
            <small>Já tem conta? <a href="login.html">Faça login</a></small>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>