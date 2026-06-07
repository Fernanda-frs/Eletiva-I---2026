<?php

require_once('cabecalho.php');
require_once('conexao.php');

$stmt = $pdo->query("SELECT a.*, p.nome professor, pl.descricao plano FROM aluno a
                    INNER JOIN professor p
                    ON p.id = a.professor_id

                    INNER JOIN plano pl
                    ON pl.id = a.plano_id"
                    );

$resultado = $stmt->fetchAll();

?>

<h2>Alunos</h2>

<a href="novo_aluno.php"
class="btn btn-success mb-3">
Novo Registro
</a>

<table class="table table-striped">

<tr>
<th>ID</th>
<th>Nome</th>
<th>CPF</th>
<th>Professor</th>
<th>Plano</th>
<th>Ações</th>
</tr>

<?php foreach($resultado as $r): ?>

<tr>

<td><?= $r['id']?></td>
<td><?= $r['nome']?></td>
<td><?= $r['cpf']?></td>
<td><?= $r['professor']?></td>
<td><?= $r['plano']?></td>

<td>

<a href="alterar_aluno.php?id=<?=$r['id']?>"
class="btn btn-warning btn-sm">
Editar
</a>

<a href="consultar_aluno.php?id=<?=$r['id']?>"
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