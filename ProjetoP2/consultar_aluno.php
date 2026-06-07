<?php

require_once('cabecalho.php');
require_once('conexao.php');

try{

$stmt = $pdo->prepare(
"SELECT * FROM aluno
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

<h1>Consultar Aluno</h1>

<form method="post"
action="consultar_aluno.php?id=<?= $resultado['id'] ?>">

<div class="card">

<div class="card-body">

<p>

<strong>Nome:</strong>

<?= $resultado['nome'] ?>

</p>

<p>

<strong>CPF:</strong>

<?= $resultado['cpf'] ?>

</p>

<p>

<strong>Telefone:</strong>

<?= $resultado['telefone'] ?>

</p>

</div>

</div>

<br>

<button
type="submit"
class="btn btn-danger"

onclick="return confirm(
'Deseja realmente excluir este aluno?'
);">

Excluir

</button>

<a href="alunos.php"
class="btn btn-secondary">

Voltar

</a>

</form>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

$id = $_GET['id'];

try{

$stmt = $pdo->prepare(
"DELETE FROM aluno
WHERE id=?"
);

if($stmt->execute([$id])){

header("Location: alunos.php");
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