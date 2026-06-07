<?php

require_once('cabecalho.php');

?>

<h1>Novo Plano</h1>

<form method="post">

<div class="mb-3">

<label class="form-label">
Descrição
</label>

<input
type="text"
name="descricao"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">
Valor
</label>

<input
type="number"
step="0.01"
name="valor"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">
Duração (Meses)
</label>

<input
type="number"
name="duracao"
class="form-control"
required>

</div>

<button
type="submit"
class="btn btn-primary">

Salvar

</button>

<a href="planos.php"
class="btn btn-secondary">

Voltar

</a>

</form>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

require_once('conexao.php');

$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$duracao = $_POST['duracao'];

try{

$stmt = $pdo->prepare(

"INSERT INTO plano
(descricao,valor,duracao_meses)
VALUES(?,?,?)"

);

if(
$stmt->execute([
$descricao,
$valor,
$duracao
])
){

echo "<div class='alert alert-success mt-3'>
Plano cadastrado com sucesso!
</div>";

}

}catch(Exception $e){

echo "Erro: ".$e->getMessage();

}

}

?>

<?php
require_once('rodape.php');
?>