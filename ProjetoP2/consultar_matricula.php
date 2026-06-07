<?php

require_once('cabecalho.php');
require_once('conexao.php');

$stmt = $pdo->prepare(

"SELECT

m.*,

a.nome aluno,
p.nome professor,
pl.descricao plano

FROM matricula m

INNER JOIN aluno a
ON a.id = m.aluno_id

INNER JOIN professor p
ON p.id = m.professor_id

INNER JOIN plano pl
ON pl.id = m.plano_id

WHERE m.id=?"

);

$stmt->execute([
$_GET['id']
]);

$resultado = $stmt->fetch();

?>

<h1>Consultar Matrícula</h1>

<div class="card">

<div class="card-body">

<p>
<strong>Aluno:</strong>
<?= $resultado['aluno'] ?>
</p>

<p>
<strong>Professor:</strong>
<?= $resultado['professor'] ?>
</p>

<p>
<strong>Plano:</strong>
<?= $resultado['plano'] ?>
</p>

<p>
<strong>Data Matrícula:</strong>
<?= $resultado['data_matricula'] ?>
</p>

<p>
<strong>Vencimento:</strong>
<?= $resultado['data_vencimento'] ?>
</p>

<p>
<strong>Status:</strong>
<?= $resultado['status'] ?>
</p>

</div>

</div>

<form method="post">

<br>

<button
type="submit"
class="btn btn-danger"

onclick="return confirm(
'Deseja realmente excluir esta matrícula?'
);">

Excluir

</button>

<a href="matriculas.php"
class="btn btn-secondary">

Voltar

</a>

</form>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

$stmt = $pdo->prepare(
"DELETE FROM matricula
WHERE id=?"
);

if($stmt->execute([
$_GET['id']
])){

header(
"Location: matriculas.php"
);

exit();

}

}

?>

<?php require_once('rodape.php'); ?> 