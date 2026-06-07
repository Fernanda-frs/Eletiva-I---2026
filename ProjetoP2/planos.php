<?php

require_once('cabecalho.php');
require_once('conexao.php');

try{

    $stmt = $pdo->query(
        "SELECT * FROM plano
         ORDER BY descricao"
    );

    $resultado = $stmt->fetchAll();

}catch(Exception $e){

    echo "Erro: ".$e->getMessage();

}

?>

<h2>Planos</h2>

<a href="novo_plano.php"
class="btn btn-success mb-3">

Novo Registro

</a>

<table class="table table-hover table-striped">

<thead>

<tr>

<th>ID</th>
<th>Descrição</th>
<th>Valor</th>
<th>Duração</th>
<th>Ações</th>

</tr>

</thead>

<tbody>

<?php foreach($resultado as $r): ?>

<tr>

<td><?= $r['id'] ?></td>

<td><?= $r['descricao'] ?></td>

<td>
R$ <?= number_format(
$r['valor'],
2,
',',
'.'
) ?>
</td>

<td>
<?= $r['duracao_meses'] ?> meses
</td>

<td>

<a href="alterar_plano.php?id=<?= $r['id'] ?>"
class="btn btn-warning btn-sm">

Editar

</a>

<a href="consultar_plano.php?id=<?= $r['id'] ?>"
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