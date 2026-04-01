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
              <label for="numero" class="form-label">Informe um número (ponto flutuante):</label>
              <input type="text" id="numero" name="numero" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
          <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $numero = $_POST['numero'];
            
            $float = floatval($numero);
            $arredondadoCima = ceil($float);    
            $arredondadoBaixo = floor($float);  
            $arredondadoNormal = round($float);

            echo "<p> Arredondado para cima:  $arredondadoCima </p> ";
            echo "<p> Arredondado para baixo:  $arredondadoBaixo </p> ";
            echo "<p> Arredondado normalmente:  $arredondadoNormal </p> ";
        }
        ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>