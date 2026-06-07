<?php

require_once('cabecalho.php');
require_once('conexao.php');

$stmt = $pdo->query(
    "SELECT * FROM professor"
);

$resultado = $stmt->fetchAll();

?>

<h2>Professores</h2>

<a href="novo_professor.php"
   class="btn btn-success mb-3">
   Novo Registro
</a>

<table class="table table-striped">

<tr>
<th>ID</th>
<th>Nome</th>
<th>CREF</th>
<th>Ações</th>
</tr>

<?php foreach($resultado as $r): ?>

<tr>

<td><?= $r['id']?></td>
<td><?= $r['nome']?></td>
<td><?= $r['cref']?></td>

<td>

<a href="alterar_professor.php?id=<?=$r['id']?>"
class="btn btn-warning btn-sm">
Editar
</a>

<a href="consultar_professor.php?id=<?=$r['id']?>"
class="btn btn-info btn-sm">
Consultar
</a>

</td>

</tr>

<?php endforeach; ?>

</table>

<?php
require_once('rodape.php');
?>