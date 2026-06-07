<?php

require_once('cabecalho.php');

?>

<h1 class="mb-4">

Sistema de Gerenciamento de Academia

</h1>

<div class="alert alert-success">

Bem-vindo(a),
<strong>

<?= $_SESSION['nome'] ?>

</strong>

</div>

<div class="row">

<div class="col-md-4">

<div class="card">

<div class="card-body">

<h5>Alunos</h5>

<p>
Cadastro e gerenciamento de alunos.
</p>

<a href="alunos.php"
class="btn btn-primary">

Acessar

</a>

</div>
</div>

</div>

<div class="col-md-4">

<div class="card">

<div class="card-body">

<h5>Professores</h5>

<p>
Cadastro e gerenciamento de professores.
</p>

<a href="professores.php"
class="btn btn-primary">

Acessar

</a>

</div>
</div>

</div>

<div class="col-md-4">

<div class="card">

<div class="card-body">

<h5>Planos</h5>

<p>
Cadastro e gerenciamento de planos.
</p>

<a href="planos.php"
class="btn btn-primary">

Acessar

</a>

</div>
</div>

</div>

</div>

<br>

<div class="row">

<div class="col-md-4">

<div class="card">

<div class="card-body">

<h5>Matrículas</h5>

<p>
Controle das matrículas da academia.
</p>

<a href="matriculas.php"
class="btn btn-primary">

Acessar

</a>

</div>
</div>

</div>

</div>

<?php

require_once('rodape.php');

?>