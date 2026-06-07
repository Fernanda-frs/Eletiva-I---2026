<?php

require_once('cabecalho.php');
require_once('conexao.php');

$professores =
$pdo->query(
"SELECT * FROM professor"
)->fetchAll();

$planos =
$pdo->query(
"SELECT * FROM plano"
)->fetchAll();

?>

<h1>Novo Aluno</h1>

<form method="post">

<div class="mb-3">
<label>Nome</label>

<input type="text"
       name="nome"
       class="form-control"
       required>
</div>

<div class="mb-3">
<label>CPF</label>

<input type="text"
       name="cpf"
       class="form-control"
       required>
</div>

<div class="mb-3">
<label>Telefone</label>

<input type="text"
       name="telefone"
       class="form-control">
</div>

<div class="mb-3">

<label>Professor</label>

<select name="professor"
        class="form-select">

<?php foreach($professores as $p): ?>

<option value="<?=$p['id']?>">

<?=$p['nome']?>

</option>

<?php endforeach; ?>

</select>

</div>

<div class="mb-3">

<label>Plano</label>

<select name="plano"
        class="form-select">

<?php foreach($planos as $p): ?>

<option value="<?=$p['id']?>">

<?=$p['descricao']?>

</option>

<?php endforeach; ?>

</select>

</div>

<button type="submit"
class="btn btn-primary">
Salvar
</button>

</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$professor = $_POST['professor'];
$plano = $_POST['plano'];

$stmt = $pdo->prepare(
"INSERT INTO aluno
(nome,cpf,telefone,professor_id,plano_id)
VALUES(?,?,?,?,?)"
);

if($stmt->execute([
$nome,
$cpf,
$telefone,
$professor,
$plano
])){
echo "<p>Cadastro realizado!</p>";
}

}

require_once('rodape.php');
?>