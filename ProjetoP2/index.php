<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Academia - Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">

<div class="card shadow p-4" style="width:100%; max-width:400px;">

<h3 class="text-center mb-4">
Sistema de Gerenciamento de Academia
</h3>

<form method="post">

<div class="mb-3">
<label>Email</label>

<input
type="email"
name="email"
class="form-control"
required>
</div>

<div class="mb-3">
<label>Senha</label>

<input
type="password"
name="senha"
class="form-control"
required>
</div>

<button
type="submit"
class="btn btn-primary w-100">
Entrar
</button>

</form>

<?php

require_once('conexao.php');

session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){

$email = $_POST['email'];
$senha = $_POST['senha'];

try{

$stmt = $pdo->prepare(
"SELECT * FROM usuario
WHERE email=?"
);

$stmt->execute([$email]);

$usuario = $stmt->fetch();

if(
$usuario &&
password_verify(
$senha,
$usuario['senha']
)
){

$_SESSION['nome'] = $usuario['nome'];
$_SESSION['acesso'] = true;

header('Location: principal.php');
exit();

}else{

echo "<p class='text-danger mt-3'>
Credenciais inválidas!
</p>";

}

}catch(Exception $e){

echo "Erro: ".$e->getMessage();

}

}

?>

<p class="text-center mt-3">

Não possui conta?

<a href="cadastro.php">
Cadastre-se
</a>

</p>

</div>
</div>

</body>
</html>