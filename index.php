<?php namespace projeto\ProjetoTI23T; //Faço o comentário   
    require_once('php/funcoes.php'); //Acessando Arquivo
    use projeto\ProjetoTI23T\php\Funcao; //Acessando a classe que esta no arquivo funcoes.php
    $funcao = new Funcao();//Recebe um contrutor da classe Funcao/ -> Conecta index com Funcoes
?>

<!-- Faz o comentário -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Calculadora</title>
</head>
<body>
    <form method="POST" style="text-align:center;margin:10%;padding:15%;background-color:#777">
        <h1>Calculadora</h1>

        <div class="mb-3">
        <label for="lprimeiroNumero" class="form-label">Primeiro Numero</label>
        <input type="Number" class="form-control" id="primeiroNumero" name="primeiroNumero" >
        </div>

        <div class="mb-3">
        <label for="lsegundoNumero" class="form-label">Informe segundo Numero</label>
        <input type="Number" class="form-control" id="segundoNumero" name="segundoNumero" >
        </div>

        <div class="mb-3">
        <label for="lresultado" class="form-label">Resultado</label>
        <textarea class="form-control" id="resultado" name="resultado" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-dark">Somar
            <?php
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                //Chamo a variavel da classe funcao
                $funcao->coletar($num1, $num2);
                $funcao->somar();
                echo $funcao->resultado;
                $_POST['resultado'] = $funcao->resultado;
                echo $num1." ".$num2;
                //PARADO AQUI
            ?>
        </button><br><br>

        <button type="button" class="btn btn-dark">Subtrair</button><br><br>
        <button type="button" class="btn btn-dark">Mutiplicar</button><br><br>
        <button type="button" class="btn btn-dark">Dividir</button>
    </form>
</body>


</html>