<?php

echo "Hello world!\n";
/*****compostos-tiposdedados*****/
$carros = array ("gol", "uno", "camaro",12,23,34.5,true);
var_dump($carros
);
if(is_array($carros)):
    echo "é um array";
    else:
        echo " não é um array";
        endif;
        
        //object
        class Cliente{
            public $nome;
            public function atribuirNome($nome){
                 $this->$nome = $nome;
            }
        }
        
        $cliente = new Cliente();
        $cliente->atribuirNome("rodrigo");
        var_dump($cliente);
        if(is_object($carros)):
    echo "é um objeto";
    else:
        echo " não é um objeto
        ";
        endif;
        
        //especial
        $cidade = NULL;
        var_dump($cidade);
        
        //concatenação
 $nome = "RODRIGO OLIVEIRA";
 echo '
 meu nome é '.$nome.'e minha idade é \'23\'.';
 echo '
 ';
echo "mwu nome é \"$nome\".
";

/********escopo de variaveis*******/
$a = 1;
$b = 56;
$c = 67;
$nome = 'Ânica';
 function  exibeNome(){
     global $nome;
     echo $nome;
 }
exibeNome();
echo "
";

function exibeCidade(){
    global $cidade;
    $cidade = "Matina";
}
        exibeCidade();
        echo $cidade;
        echo "
        ";
        
        
        function soma(){
           echo $GLOBALS ['a'] +   $GLOBALS['b'] +   $GLOBALS['c']
           ;
        }
         soma();
         echo "
         ";
          //contantes - não mudam durante o script
          
          define("NOME", "joana dark");
          echo NOME;
         
