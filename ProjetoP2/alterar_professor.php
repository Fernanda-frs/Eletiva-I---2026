<?php

require_once('cabecalho.php');
require_once('conexao.php');

$mensagem = "";

if($_SERVER['REQUEST_METHOD']=="POST"){

$nome = $_POST['nome'];
$cref = $_POST['cref'];
$telefone = $_POST['telefone'];

$id = $_GET['id'];

try{

$sql =

"UPDATE professor

SET nome=?,
    cref=?,
    telefone=?

WHERE id=?";

$stmt = $pdo->prepare($sql);

if(
$stmt->execute([
$nome,
$cref,
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
"SELECT * FROM professor
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

<h1>Alterar Professor</h1>

<form method="post"
action="alterar_professor.php?id=<?= $resultado['id'] ?>">

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
CREF
</label>

<input
type="text"
name="cref"
class="form-control"
value="<?= $resultado['cref'] ?>"
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

<a href="professores.php"
class="btn btn-secondary">

Voltar

</a>

</form>

<?= $mensagem ?>

<?php
require_once('rodape.php');
?>