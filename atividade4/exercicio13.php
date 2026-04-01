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
              <label for="frase" class="form-label">Informe uma frase:</label>
              <input type="text" id="frase" name="frase" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if($_SERVER['REQUEST_METHOD']== "POST"){
        $frase = $_POST['frase'];

        $frase = trim($frase);
        $palavras = explode(" ", $frase);
        $palavras = array_filter($palavras);
        $totalPalavras = count($palavras);
        $maiorPalavra = "";

        foreach ($palavras as $palavra) {
            if (strlen($palavra) > strlen($maiorPalavra)) {
                $maiorPalavra = $palavra;
            }
        }
        echo "<p>Frase:  $frase </p>";
        echo "<p>Total de palavras: $totalPalavras </p>";
        echo "<p>Maior palavra: $maiorPalavra </p>";

 }

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>