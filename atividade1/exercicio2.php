<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        /* Removi o border-radius de inputs, selects e botões */
        .form-control, 
        .form-select, 
        .btn {
            border-radius: 0 !important;
        }
    </style>
</head>

<body class="p-5 bg-light">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

    <div class="container bg-white p-4 ">
    <form>
        <div class="row g-5 mb-3">
            <div class="col-md-1">
                <label class="form-label fw-bold">Código</label>
                <input type="text" class="form-control" value="32" readonly>
            </div>
            <div class="col-md-5">
                <label class="form-label fw-bold">Nome</label>
                <input type="text" class="form-control" placeholder="Nome Completo do Cliente">
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold">E-mail</label>
                <input type="email" class="form-control" placeholder="cliente@dominio.com">
            </div>
            <div class="col-md-2">
                <label class="form-label fw-bold">CPF</label>
                <input type="text" class="form-control" placeholder="Só números">
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-2">
                <label class="form-label fw-bold">Nº Celular</label>
                <input type="text" class="form-control" placeholder="Nº do celular">
            </div>
            <div class="col-md-2">
                <label class="form-label fw-bold">Nº Telefone fixo</label>
                <input type="text" class="form-control" placeholder="Nº telefone">
            </div>
            <div class="col-md-2">
                <label class="form-label fw-bold">CEP</label>
                <input type="text" class="form-control" placeholder="ex:88308070">
            </div>
            <div class="col-md-3">
                <label class="form-label fw-bold">Logradouro</label>
                <input type="text" class="form-control" placeholder="ex:Rua 1400,">
            </div>
            <div class="col-md-1">
                <label class="form-label fw-bold">Nº</label>
                <input type="text" class="form-control" placeholder="Nº">
            </div>
            <div class="col-md-2">
                <label class="form-label fw-bold">Bairro</label>
                <input type="text" class="form-control" placeholder="Bairro">
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <label class="form-label fw-bold">Cidade</label>
                <input type="text" class="form-control" placeholder="Cidade">
            </div>
            <div class="col-md-1">
                <label class="form-label fw-bold">UF</label>
                <input type="text" class="form-control" placeholder="UF">
            </div>
            <div class="col-md-2">
                <label class="form-label fw-bold">Status</label>
                <select class="form-select">
                    <option selected disabled>Selecione</option>
                    <option value="1">Ativo</option>
                    <option value="2">Inativo</option>
                </select>
            </div>
        </div>

        <div class="d-flex justify-content-end gap-2">
            <button type="reset" class="btn btn-danger px-4">Resetar</button>
            <button type="submit" class="btn btn-success px-4">Próximo</button>
        </div>
    </form>
</div>

  
</body>

</html>