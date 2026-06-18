<?php   
    namespace Projeto\ProjetoTI23T\telas; //Lugar do arquivo  
    require_once('../php/funcoes.php'); //Acessando Arquivo
    include('cabecalho.php'); //Chama tela
    use projeto\ProjetoTI23T\php\Funcao; //Acessando a classe que esta no arquivo funcoes.php
    $funcao = new Funcao();//Recebe um contrutor da classe Funcao/ -> Conecta index com Funcoes
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        <button type="submit" class="btn btn-dark">Subtrair
            <?php
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                //Chamo a variavel da classe funcao
                $funcao->coletar($num1, $num2);
            ?>
        </button>

        <h2 style="background-color:#0000">
       <?php
        echo $funcao->subtrair();
        ?>
        </h2>
    </form>
    
</body>
</html>