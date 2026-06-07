<?php

require_once('cabecalho.php');
require_once('conexao.php');

$alunos = $pdo->query(
"SELECT * FROM aluno ORDER BY nome"
)->fetchAll();

$professores = $pdo->query(
"SELECT * FROM professor ORDER BY nome"
)->fetchAll();

$planos = $pdo->query(
"SELECT * FROM plano ORDER BY descricao"
)->fetchAll();

?>

<h1>Nova Matrícula</h1>

<form method="post">

<div class="mb-3">

<label class="form-label">
Aluno
</label>

<select name="aluno"
        class="form-select"
        required>

<?php foreach($alunos as $a): ?>

<option value="<?= $a['id'] ?>">

<?= $a['nome'] ?>

</option>

<?php endforeach; ?>

</select>

</div>

<div class="mb-3">

<label class="form-label">
Professor
</label>

<select name="professor"
        class="form-select"
        required>

<?php foreach($professores as $p): ?>

<option value="<?= $p['id'] ?>">

<?= $p['nome'] ?>

</option>

<?php endforeach; ?>

</select>

</div>

<div class="mb-3">

<label class="form-label">
Plano
</label>

<select name="plano"
        class="form-select"
        required>

<?php foreach($planos as $p): ?>

<option value="<?= $p['id'] ?>">

<?= $p['descricao'] ?>

</option>

<?php endforeach; ?>

</select>

</div>

<div class="mb-3">
<label>Data da Matrícula</label>
<input type="date"
       name="data_matricula"
       class="form-control"
       required>
</div>

<div class="mb-3">
<label>Data de Vencimento</label>
<input type="date"
       name="data_vencimento"
       class="form-control"
       required>
</div>

<div class="mb-3">

<label>Status</label>

<select name="status"
        class="form-select">

<option value="Ativa">
Ativa
</option>

<option value="Suspensa">
Suspensa
</option>

<option value="Cancelada">
Cancelada
</option>

</select>

</div>

<button class="btn btn-primary">
Salvar
</button>

</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

$aluno = $_POST['aluno'];
$professor = $_POST['professor'];
$plano = $_POST['plano'];
$dataMatricula = $_POST['data_matricula'];
$dataVencimento = $_POST['data_vencimento'];
$status = $_POST['status'];

$stmt = $pdo->prepare(

"INSERT INTO matricula
(aluno_id,
 professor_id,
 plano_id,
 data_matricula,
 data_vencimento,
 status)

VALUES(?,?,?,?,?,?)"

);

if($stmt->execute([
$aluno,
$professor,
$plano,
$dataMatricula,
$dataVencimento,
$status
])){
echo "<p>Matrícula realizada!</p>";
}

}

require_once('rodape.php');

?>