<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Controle de Estoque de Livros</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-4">
<h2>Cadastro de Livros</h2>

<form method="post">
<?php
for ($i = 0; $i < 5; $i++) {
    echo "<div class='mb-3'>
            <label class='form-label'>Título do livro:</label>
            <input type='text' name='titulo[]' class='form-control' required>
          </div>

          <div class='mb-3'>
            <label class='form-label'>Quantidade em estoque:</label>
            <input type='number' name='quantidade[]' class='form-control' required min='0'>
          </div>
          <hr>";
}
?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titulos = $_POST["titulo"];
    $quantidades = $_POST["quantidade"];

    $livros = []; 
    $alertas = [];

    for ($i = 0; $i < count($titulos); $i++) {

        $titulo = trim($titulos[$i]);
        $quantidade = intval($quantidades[$i]);

        $livros[$titulo] = $quantidade;

        if ($quantidade < 5) {
            $alertas[] = "Atenção: o livro <strong>$titulo</strong> possui estoque baixo ({$quantidade} unidades).";
        }
    }

    ksort($livros);


    if (!empty($alertas)) {
        foreach ($alertas as $msg) {
            echo "<p>$msg</p>";
        }
      
    }

    echo "<p>Lista de Livros (Ordenada pelo título)</p>";

    foreach ($livros as $titulo => $quantidade) {
        echo "<p><strong>$titulo</strong> - Estoque: $quantidade</p>";
    }

}
?>

</div>
</body>
</html>