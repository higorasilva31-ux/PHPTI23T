<?php
    namespace Projeto\projetoTI23T\php;

    class Funcao{
        //Encapsulamento = EVITAR que outras classes do projeto acessem diretamente as suas variáveis
        private int $num1;
        private int $num2;
        private int $resultado;

        //Coletar Metodo
        public function coletar(int $num1, int $num2){
            $this->num1         = $num1;
            $this->num2         = $num2;
        }//Fim do Coletar

        //Contrutor = Instancia as variaveis =Dar Valores Iniciais
        public function __contruct(){
            $this->resultado = 0;
        }//FIM construtor

        //Metodo modificadores(SET) e acesso(GET)

        //GET
        public function __get(string $dados):mixed
        {
            return $this->dados;
        }//FIM GET

        //SET
        public function __SET(string $variavel, string $novodado):void
        {
            $this->variavel = $novodado;
        }//FIM SET

        //Metodos Somar, Subtrair, Mutiplicar, Dividir

        //Somar
        public function somar(){
            $this->resultado = $this->num1 + $this->num2;
            return "<br>A soma do $this->num1 e do $this->num2 é: $this->resultado<br>";
        }//FIM DO METODO SOMAR

        //SUBTRAIR
        public function subtrair(){
            $this->resultado = $this->num1 - $this->num2;
            return "<br>A subtração do $this->num1 e do $this->num2 é: $this->resultado<br>";
        }//FIM DO METODO SUBTRAIR

        //MUTIPLICAR
        public function multiplicar(){
            $this->resultado = $this->num1 * $this->num2;
            return "<br>A multiplicação do $this->num1 e do $this->num2 é: $this->resultado<br>";
        }//FIM DO METODO MULTIPLICAR

        //DIVIDIR
        public function dividir(){
            if($this->num1 <= 0 || $this->num2 <= 0)
            {
                return "Impossivel dividir por zero!";
            }
            else
            {
                $this->resultado = $this->num1 / $this->num2;
            }
            return "<br>A divisão do $this->num1 e do $this->num2 é: $this->resultado<br>";
        }//FIM DO METODO DIVIDIR

        //BASKARA
        public function bhaskara(int $a, int $b, int $c){
            $delta = pow($b,2) - 4 * $a * $c;

            if($delta < 0){
                return "Impossível calcular X1 e X2 de delta negativo, valor do delta: $delta";
            }else{
                $x1 = (-$b + sqrt($delta))/(2 * $a);
                $x2 = (-$b - sqrt($delta))/(2 * $a);

                return "<br>Delta: $delta<br>X1: $x1<br>X2: $x2";
            }
        } //fim do bhaskara

            //IMC
        public function imc(float $altura, float $peso){
            if($altura <= 0 || $peso <= 0)
            {
                return "Impossível calcular valores menores ou igual a zero!!";
            }
            else
            {
            $resultado = $altura / ($peso * 2);
            }
            elseif($resultado < 20) 
            {
                return "Você está abaixo do peso!";
            }
            elseif($resultado > 20 $$ $resultado < 30)
            {
                return "Seu peso está na média!";
            }
            elseif($resultado > 30)
            {
                return "Você está acima do peso";
            }
        }


    }//Fim da classe Funcao
?><!-- Fechamento da tag php -->