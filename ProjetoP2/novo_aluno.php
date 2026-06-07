<?php

require_once('cabecalho.php');
require_once('conexao.php');

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

    <button type="submit"
            class="btn btn-primary">
        Salvar
    </button>

    <a href="alunos.php"
       class="btn btn-secondary">
        Voltar
    </a>

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];

    $stmt = $pdo->prepare(
        "INSERT INTO aluno
        (nome, cpf, telefone)
        VALUES (?, ?, ?)"
    );

    if($stmt->execute([
        $nome,
        $cpf,
        $telefone
    ])){

        echo "
        <div class='alert alert-success mt-3'>
            Cadastro realizado com sucesso!
        </div>
        ";

    }else{

        echo "
        <div class='alert alert-danger mt-3'>
            Erro ao cadastrar.
        </div>
        ";

    }

}

require_once('rodape.php');
?>