<?php

require_once('cabecalho.php');
require_once('conexao.php');

$mensagem = "";

if($_SERVER['REQUEST_METHOD']=="POST"){

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

$id = $_GET['id'];

try{

$stmt = $pdo->prepare(

"UPDATE aluno

SET nome=?,
    cpf=?,
    telefone=?

WHERE id=?"

);

if(
$stmt->execute([
$nome,
$cpf,
$telefone,
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

<h1>Alterar Aluno</h1>

<form method="post"
action="alterar_aluno.php?id=<?= $resultado['id'] ?>">

<div class="mb-3">

<label class="form-label">
Nome
</label>

<input
type="text"
name="nome"
class="form-control"
value="<?= $resultado['nome'] ?>"
required>

</div>

<div class="mb-3">

<label class="form-label">
CPF
</label>

<input
type="text"
name="cpf"
class="form-control"
value="<?= $resultado['cpf'] ?>"
required>

</div>

<div class="mb-3">

<label class="form-label">
Telefone
</label>

<input
type="text"
name="telefone"
class="form-control"
value="<?= $resultado['telefone'] ?>">

</div>

<button
type="submit"
class="btn btn-primary">

Salvar

</button>

<a href="alunos.php"
class="btn btn-secondary">

Voltar

</a>

</form>

<?= $mensagem ?>

<?php
require_once('rodape.php');
?>