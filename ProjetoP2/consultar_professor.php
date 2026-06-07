<?php

require_once('cabecalho.php');
require_once('conexao.php');

try{

$stmt = $pdo->prepare(
"SELECT * FROM professor
WHERE id=?"
);

$stmt->execute([
$_GET['id']
]);

$resultado = $stmt->fetch();

}catch(Exception $e){

echo "Erro: ".$e->getMessage();

}

?>

<h1>Consultar Professor</h1>

<form method="post"
action="consultar_professor.php?id=<?= $resultado['id'] ?>">

<div class="card">

<div class="card-body">

<p>

<strong>Nome:</strong>

<?= $resultado['nome'] ?>

</p>

<p>

<strong>CREF:</strong>

<?= $resultado['cref'] ?>

</p>

<p>

<strong>Telefone:</strong>

<?= $resultado['telefone'] ?>

</p>

</div>

</div>

<br>

<button
type="submit"
class="btn btn-danger"

onclick="return confirm(
'Deseja realmente excluir este professor?'
);">

Excluir

</button>

<a href="professores.php"
class="btn btn-secondary">

Voltar

</a>

</form>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    $id = $_GET['id'];

    try{

        // Verifica se existem matrículas vinculadas ao professor
        $stmt = $pdo->prepare(
                    "SELECT COUNT(*) AS total
                    FROM matricula
                    WHERE professor_id = ?"
                    );

$stmt->execute([$id]);

$total = $stmt->fetch();

if($total['total'] > 0){

           echo "
            <script>
                alert('Existem matrículas vinculadas a este professor. É necessário cancelar as matrículas antes da exclusão.');
                </script>
                ";

        }else{

            // Exclui o professor
            $stmt = $pdo->prepare(
                'DELETE FROM professor WHERE id = ?'
            );

            if($stmt->execute([$id])){

                echo "
                <script>
                    alert('Professor excluído com sucesso.');
                    window.location='professores.php';
                </script>
                ";

                exit();

            }else{

                echo "
                <script>
                    alert('Erro ao excluir professor.');
                </script>
                ";

            }

        }

    }catch(Exception $e){

        echo "
        <script>
            alert('Erro: ".addslashes($e->getMessage())."');
        </script>
        ";

    }

}

?>

<?php
require_once('rodape.php');
?>