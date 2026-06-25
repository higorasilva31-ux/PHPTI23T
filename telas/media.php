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
    <form method="POST" style="width:50%;text-align:center;margin-left:25%;padding:2%;">
        <div class="row g-3">
            <h1>IMC</h1>
            <div class="col">
                        <input type="step" class="form-control" id="num1" name="num1" placeholder="num1" >
            </div>
            <div class="col">
                        <input type="step" class="form-control" id="num2" name="num2" placeholder="num2">
            </div>
             <div class="col">
                        <input type="step" class="form-control" id="num3" name="num3" placeholder="num3">
            </div>
        </div>
        <button type="submit" style="text-align:center;margin-top:5%;padding:2%;" class="btn btn-dark">Calcular
            <?php
                    if(isset($_POST['num1']) || isset($_POST['num2']) || isset($_POST['num3'])){
                        $num1 = (float)$_POST['num1'];
                        $num2 = (float)$_POST['num2'];
                        $num3 = (float)$_POST['num3'];
                        //Chamo a variável que representa a classe Funcao
                        $resultado = $funcao->media($num1, $num2, $num3);
                    }
            ?>
        </button>
        <h2>
            <?php
                if(isset($_POST['altura']) || isset($_POST['peso'])){
                        echo $resultado;
                }else
                {
                        echo "Preencha os campos!";
                }
            ?>
        </h2>

    </form>
    
</body>
</html>