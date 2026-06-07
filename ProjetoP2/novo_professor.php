<?php
require_once('cabecalho.php');
?>

<h1>Novo Professor</h1>

<form method="post">

<div class="mb-3">
<label class="form-label">Nome</label>
<input type="text"
       name="nome"
       class="form-control"
       required>
</div>

<div class="mb-3">
<label class="form-label">CREF</label>
<input type="text"
       name="cref"
       class="form-control"
       required>
</div>

<div class="mb-3">
<label class="form-label">Telefone</label>
<input type="text"
       name="telefone"
       class="form-control">
</div>

<button type="submit"
        class="btn btn-primary">
        Salvar
</button>

</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    require_once('conexao.php');

    $nome = $_POST['nome'];
    $cref = $_POST['cref'];
    $telefone = $_POST['telefone'];

    $stmt = $pdo->prepare(
        "INSERT INTO professor
        (nome,cref,telefone)
        VALUES(?,?,?)"
    );

    if($stmt->execute([
        $nome,
        $cref,
        $telefone
    ])){
        echo "<p>Cadastro realizado!</p>";
    }
}

require_once('rodape.php');
?>