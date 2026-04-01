<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1></h1>
<form method="post">
<div class="mb-3">
              <label for="senha" class="form-label">Criar uma senha aleatória</label>
              <select id="senha1" name="senha1" class="form-select" required="">
                <option value="Sim">Sim</option>
              </select>
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $senha1 = $_POST['senha1'];
            
           $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $tamanho = 8;
            $senha = '';

            for ($i = 0; $i < $tamanho; $i++) {
                $indice = random_int(0, strlen($caracteres) - 1);
                $senha .= $caracteres[$indice];
            }

            echo "<p>Senha segura:  $senha</p>";
        }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>