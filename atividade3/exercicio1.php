<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1></h1>
        <form method="post">
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe o valor do 1º número:</label>
                <input type="text" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Informe o valor do 2º número:</label>
                <input type="text" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor3" class="form-label">Informe o valor do 3º número:</label>
                <input type="text" id="valor3" name="valor3" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor4" class="form-label">Informe o valor do 4º número:</label>
                <input type="text" id="valor4" name="valor4" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor5" class="form-label">Informe o valor do 5º número:</label>
                <input type="text" id="valor5" name="valor5" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor6" class="form-label">Informe o valor do 6º número:</label>
                <input type="text" id="valor6" name="valor6" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor7" class="form-label">Informe o valor do 7º número:</label>
                <input type="text" id="valor7" name="valor7" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form> 
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $valores = array(
                $_POST['valor1'],
                $_POST['valor2'],
                $_POST['valor3'],
                $_POST['valor4'],
                $_POST['valor5'],
                $_POST['valor6'],
                $_POST['valor7']
         );

   
            for ($i = 0; $i < 7; $i++) {
                $valores[$i] = floatval($valores[$i]);
            }

    
            $menor = $valores[0];
            $posicao = 1;

            for ($i = 1; $i < 7; $i++) {
                if ($valores[$i] < $menor) {
                    $menor = $valores[$i];
                    $posicao = $i + 1; 
                }
            }

            echo "<div class='alert alert-success mt-3'>";
            echo "Menor valor: <strong>$menor</strong><br>";
            echo "Posição: <strong>$posicao</strong>";
            echo "</div>";
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"></script>
    </div>
</body>

</html>