<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Produtos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-4">
<h2>Cadastro de Produtos</h2>

<form method="post">
<?php
for ($i = 0; $i < 5; $i++) {
    echo "<div class='mb-3'>
            <label class='form-label'>Código:</label>
            <input type='text' name='codigo[]' class='form-control' required>
          </div>

          <div class='mb-3'>
            <label class='form-label'>Nome:</label>
            <input type='text' name='nome[]' class='form-control' required>
          </div>

          <div class='mb-3'>
            <label class='form-label'>Preço (R$):</label>
            <input type='number' step='0.01' name='preco[]' class='form-control' required>
          </div>
          <hr>";
}
?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $codigos = $_POST["codigo"];
    $nomes = $_POST["nome"];
    $precos = $_POST["preco"];

    $produtos = []; 

    for ($i = 0; $i < count($codigos); $i++) {

        $codigo = trim($codigos[$i]);
        $nome = trim($nomes[$i]);
        $preco = floatval($precos[$i]);

        if ($preco > 100) {
            $preco = $preco * 0.9;
        }

       
        $produtos[$codigo] = [
            "nome" => $nome,
            "preco" => $preco
        ];

        ksort($produtos[$codigo]); 
    }

    uasort($produtos, function($a, $b) {
        return strcmp($a["nome"], $b["nome"]);
    });

    echo "<p>Lista de Produtos</p>";

    foreach ($produtos as $codigo => $dados) {
        $precoFormatado = number_format($dados["preco"], 2, ',', '.');

        echo "
                <p> Código: <strong>$codigo</strong> 
                Nome: <strong>{$dados["nome"]}</strong> 
                Preço: R$ $precoFormatado </p>";
          
    }
   
}
?>

</div>
</body>
</html>