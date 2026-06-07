<?php

require_once('cabecalho.php');
require_once('conexao.php');

$stmt = $pdo->query(

"SELECT m.*,
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

ORDER BY m.id"

);

$resultado = $stmt->fetchAll();

?>

<h2>Matrículas</h2>

<a href="nova_matricula.php"
class="btn btn-success mb-3">
Nova Matrícula
</a>

<table class="table table-striped">

<thead>

<tr>
<th>ID</th>
<th>Aluno</th>
<th>Professor</th>
<th>Plano</th>
<th>Matrícula</th>
<th>Vencimento</th>
<th>Status</th>
<th>Ações</th>
</tr>

</thead>

<tbody>

<?php foreach($resultado as $r): ?>

<tr>

<td><?= $r['id'] ?></td>
<td><?= $r['aluno'] ?></td>
<td><?= $r['professor'] ?></td>
<td><?= $r['plano'] ?></td>
<td><?= $r['data_matricula'] ?></td>
<td><?= $r['data_vencimento'] ?></td>
<td><?= $r['status'] ?></td>

<td>

<a href="alterar_matricula.php?id=<?= $r['id'] ?>"
class="btn btn-warning btn-sm">
Editar
</a>

<a href="consultar_matricula.php?id=<?= $r['id'] ?>"
class="btn btn-info btn-sm">
Consultar
</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

<?php
require_once('rodape.php');
?>