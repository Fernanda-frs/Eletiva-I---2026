<?php

require_once('cabecalho.php');
require_once('conexao.php');

$alunos =
$pdo->query(
"SELECT * FROM aluno"
)->fetchAll();

$professores =
$pdo->query(
"SELECT * FROM professor"
)->fetchAll();

$planos =
$pdo->query(
"SELECT * FROM plano"
)->fetchAll();

if($_SERVER['REQUEST_METHOD']=="POST"){

$stmt = $pdo->prepare(

"UPDATE matricula

SET

aluno_id=?,
professor_id=?,
plano_id=?,
data_matricula=?,
data_vencimento=?,
status=?

WHERE id=?"

);

$stmt->execute([

$_POST['aluno'],
$_POST['professor'],
$_POST['plano'],
$_POST['data_matricula'],
$_POST['data_vencimento'],
$_POST['status'],
$_GET['id']

]);

echo "<div class='alert alert-success'>
Alteração realizada!
</div>";

}

$stmt = $pdo->prepare(
"SELECT * FROM matricula
WHERE id=?"
);

$stmt->execute([
$_GET['id']
]);

$m = $stmt->fetch();

?>

<h1>Alterar Matrícula</h1>

<form method="post">

<!-- Aluno -->
<select name="aluno"
class="form-select mb-3">

<?php foreach($alunos as $a): ?>

<option
value="<?= $a['id']?>"

<?= $m['aluno_id']==$a['id']
? 'selected'
: '' ?>>

<?= $a['nome'] ?>

</option>

<?php endforeach; ?>

</select>

<!-- Professor -->

<select name="professor"
class="form-select mb-3">

<?php foreach($professores as $p): ?>

<option
value="<?= $p['id']?>"

<?= $m['professor_id']==$p['id']
? 'selected'
: '' ?>>

<?= $p['nome'] ?>

</option>

<?php endforeach; ?>

</select>

<!-- Plano -->

<select name="plano"
class="form-select mb-3">

<?php foreach($planos as $p): ?>

<option
value="<?= $p['id']?>"

<?= $m['plano_id']==$p['id']
? 'selected'
: '' ?>>

<?= $p['descricao'] ?>

</option>

<?php endforeach; ?>

</select>

<input
type="date"
name="data_matricula"
value="<?= $m['data_matricula']?>"
class="form-control mb-3">

<input
type="date"
name="data_vencimento"
value="<?= $m['data_vencimento']?>"
class="form-control mb-3">

<select
name="status"
class="form-select mb-3">

<option
<?= $m['status']=='Ativa'
?'selected':'' ?>>

Ativa

</option>

<option
<?= $m['status']=='Suspensa'
?'selected':'' ?>>

Suspensa

</option>

<option
<?= $m['status']=='Cancelada'
?'selected':'' ?>>

Cancelada

</option>

</select>

<button
class="btn btn-primary">

Salvar

</button>

<a href="matriculas.php"
class="btn btn-secondary">

Voltar

</a>

</form>

<?php require_once('rodape.php'); ?>