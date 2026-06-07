<?php

require_once('cabecalho.php');
require_once('conexao.php');

$mensagem = "";

if($_SERVER['REQUEST_METHOD']=="POST"){

$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$duracao = $_POST['duracao'];

$id = $_GET['id'];

try{

$sql =

"UPDATE plano

SET descricao=?,
    valor=?,
    duracao_meses=?

WHERE id=?";

$stmt = $pdo->prepare($sql);

if(
$stmt->execute([
$descricao,
$valor,
$duracao,
$id
])
){

$mensagem =
"<div class='alert alert-success'>
Alteração realizada!
</div>";

}

}catch(Exception $e){

echo "Erro: ".$e->getMessage();

}

}

try{

$stmt = $pdo->prepare(
"SELECT * FROM plano
WHERE id=?"
);

$stmt->execute([
$_GET['id']
]);

$resultado = $stmt->fetch();

}catch(Exception $e){

echo "Erro: ".$e->getMessage();

}

?>

<h1>Alterar Plano</h1>

<form method="post"
action="alterar_plano.php?id=<?= $resultado['id'] ?>">

<div class="mb-3">

<label class="form-label">
Descrição
</label>

<input
type="text"
name="descricao"
class="form-control"
value="<?= $resultado['descricao'] ?>"
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
value="<?= $resultado['valor'] ?>"
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
value="<?= $resultado['duracao_meses'] ?>"
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

<?= $mensagem ?>

<?php
require_once('rodape.php');
?>