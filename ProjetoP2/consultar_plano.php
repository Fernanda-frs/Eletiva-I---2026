<?php

require_once('cabecalho.php');
require_once('conexao.php');

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

<h1>Consultar Plano</h1>

<form method="post"
action="consultar_plano.php?id=<?= $resultado['id'] ?>">

<div class="card">

<div class="card-body">

<p>

<strong>Descrição:</strong>

<?= $resultado['descricao'] ?>

</p>

<p>

<strong>Valor:</strong>

R$
<?= number_format(
$resultado['valor'],
2,
',',
'.'
) ?>

</p>

<p>

<strong>Duração:</strong>

<?= $resultado['duracao_meses'] ?>

meses

</p>

</div>

</div>

<br>

<button
type="submit"
class="btn btn-danger"

onclick="return confirm(
'Deseja realmente excluir este plano?'
);">

Excluir

</button>

<a href="planos.php"
class="btn btn-secondary">

Voltar

</a>

</form>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

$id = $_GET['id'];

try{

$stmt = $pdo->prepare(
"DELETE FROM plano
WHERE id=?"
);

if($stmt->execute([$id])){

header("Location: planos.php");
exit();

}

}catch(Exception $e){

echo "Erro: ".$e->getMessage();

}

}

?>

<?php
require_once('rodape.php');
?>