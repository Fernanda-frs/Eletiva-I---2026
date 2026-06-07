<?php

session_start();

if(
!isset($_SESSION['acesso'])
||
$_SESSION['acesso'] == false
){

header("Location: index.php");
exit();

}

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1">

<title>

Sistema Academia

</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<nav
class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a
class="navbar-brand"
href="principal.php">

Academia

</a>

<button
class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav">

<span
class="navbar-toggler-icon">
</span>

</button>

<div
class="collapse navbar-collapse"
id="navbarNav">

<ul class="navbar-nav me-auto">

<li class="nav-item">

<a
class="nav-link"
href="principal.php">

Início

</a>

</li>

<li class="nav-item dropdown">

<a
class="nav-link dropdown-toggle"
href="#"
role="button"
data-bs-toggle="dropdown">

Cadastros

</a>

<ul class="dropdown-menu">

<li>
<a class="dropdown-item"
href="alunos.php">

Alunos

</a>
</li>

<li>
<a class="dropdown-item"
href="professores.php">

Professores

</a>
</li>

<li>
<a class="dropdown-item"
href="planos.php">

Planos

</a>
</li>

<li>
<a class="dropdown-item"
href="matriculas.php">

Matrículas

</a>
</li>

</ul>

</li>

<li class="nav-item">

<a
class="nav-link"
href="logout.php">

Sair

</a>

</li>

</ul>

<span
class="navbar-text text-white">

<?= $_SESSION['nome']; ?>

</span>

</div>

</div>

</nav>

<div class="container py-4">