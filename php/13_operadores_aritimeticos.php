<?php
/* os operadores atitimeticos sao usados com valores numericos para realizar operacoes comuns
*Adicao +
*Subtracao -
*Divisao /
*Multiplicacao *
*Modulo %
*exponenciacao **
*/
echo 2+2;
echo "<br>";
echo 3*3;
echo "<br>";
echo 4/4;
echo "<br>";
echo 5-5;
echo "<br>";
echo 6%6;
echo "<br>";
echo 7**7;
echo "<br>";
//com variaveis
$a = 34;
$b = 35;
$soma = $a+$b;
echo $soma;
echo "<br>";
$a = 34;
$b = 35;
$multiplicação = $a*$b;
echo $multiplicação;
echo "<br>";
$soma = $soma+$multiplicação;
echo $soma;
echo "<br>";
// () definem prioridade
echo(9+8-7*6/5)/2;
echo "<br>";
/*Operadores de incremento e decremento
*serve para somar ou subtrair em (+1 e-1)
qualquer valor do tipo numerico ou string*/
$valor= 45;
//pre-incremento
echo ++$valor;/*soma e depois retorna o valor*/
echo "<br>";
echo $valor++;/*retorna e depois soma o valor*/
echo "<br>";
echo $valor;
echo "<br>";
$valor= 5;
//pre-decremento
echo --$valor;/*subtrai e depois retorna o valor*/
echo "<br>";
echo $valor--;/*retorna e depois subtrai o valor*/
echo "<br>";
echo $valor;
echo "<br>";
//operadores de atribuição

$a=34;
$b=45;
$c= $a+$b;
echo $c;
echo "<br>";
//combinando operadores de soma com operadores de atribuiçao
/*$a+=$b;//$a = $a+$b;
echo $a;
echo "<br>";
$a*=$b;//$a = $a*$b;
echo $a;
echo "<br>";*/
$a/=$b;//$a = $a/$b;
echo $a;
echo "<br>";

/*operadores de comparacao
== igual
!= nao igual
==== identidade
!== nao identidade
<> diferente
< menor que
> maior que
<= menor ou igual
>= maior ou igual
<=> spaceship (compara dois valores
valor < valor = -1
valor == valor = 0
valor > valor = 1)
*/

if(10 == 10):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
echo "<br>";

if(10 != 12):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
echo "<br>";

if(10 === "10"):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
echo "<br>";

if(10 !== 110):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
echo "<br>";

if(10 <> 16):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
echo "<br>";

if(10 < 0):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
echo "<br>";

if(10 > 1):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
echo "<br>";

if(10<=10):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
echo "<br>";

if(10>=10):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
echo "<br>";

var_dump(10 <=> 11);
echo "<br>";

var_dump(10 <=> 10);
  echo "<br>";

var_dump(11 <=> 10);



?>