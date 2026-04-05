<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Itens com Imposto</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-4">
<h2>Cadastro de Itens</h2>

<form method="post">
<?php
for ($i = 0; $i < 5; $i++) {
    echo "<div class='mb-3'>
            <label class='form-label'>Nome do item:</label>
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

    $nomes = $_POST["nome"];
    $precos = $_POST["preco"];

    $itens = []; 

    for ($i = 0; $i < count($nomes); $i++) {

        $nome = trim($nomes[$i]);
        $preco = floatval($precos[$i]);

       
        $precoComImposto = $preco * 1.15;

        $itens[$nome] = $precoComImposto;
    }

    asort($itens);

    echo "<p>Lista de Itens com Imposto</p>";

    foreach ($itens as $nome => $preco) {
        $precoFormatado = number_format($preco, 2, ',', '.');
        echo "<p> <strong>$nome</strong> - Preço com imposto: R$ $precoFormatado </p>";
    }

}
?>

</div>
</body>
</html>