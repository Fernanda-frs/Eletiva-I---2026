<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contatos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body> 
<div class="container py-3">
<h1>Cadastro de Contatos</h1>

<form method="post">
    <?php
        for($i=0; $i<5; $i++) {
            echo '<div class="mb-3">
              <label class="form-label">Informe o nome:</label>
              <input type="text" name="nome[]" class="form-control" required>
             </div>
             <div class="mb-3">
              <label class="form-label">Informe o telefone:</label>
              <input type="text" name="numero[]" class="form-control" required>
             </div>';
        }
    ?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomes = $_POST["nome"];
    $numeros = $_POST["numero"];

    $contatos = []; 
    $erros = [];

    for ($i = 0; $i < count($nomes); $i++) {

        $nome = trim($nomes[$i]);
        $numero = trim($numeros[$i]);

      
        if (isset($contatos[$nome])) {
            $erros[] = "Nome duplicado: $nome";
            continue;
        }

        if (in_array($numero, $contatos)) {
            $erros[] = "Telefone duplicado: $numero";
            continue;
        }

        $contatos[$nome] = $numero;
    }

  
    ksort($contatos);

    echo '<hr>';
    echo '<h3>Lista de Contatos (Ordenada)</h3>';

    if (!empty($contatos)) {
        echo '<ul class="list-group">';
        foreach ($contatos as $nome => $numero) {
            echo "<li class='list-group-item'><strong>$nome</strong>: $numero</li>";
        }
        echo '</ul>';
    }

    
    if (!empty($erros)) {
        echo '<div class="alert alert-danger mt-3">';
        echo '<strong>Erros encontrados:</strong><ul>';
        foreach ($erros as $erro) {
            echo "<li>$erro</li>";
        }
        echo '</ul></div>';
    }
}
?>

</div>
</body>
</html>