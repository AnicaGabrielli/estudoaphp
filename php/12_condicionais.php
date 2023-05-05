<?php
/*condicionais
if: teta se a condicao eh verdadeira e imprime uma mensagem na tela
else: caso a condicao seja falsa imprime una mensagem
elseif: adciona outra conficao a ser testada
switch case: condicionais parecidas com if else
*/

$idade = 17;
if ($idade == 14):
  echo "a idade eh verdeira";
  elseif ($idade == 17) :
    echo "a idade eh 17";
else: 
 echo "a idade eh falsa";
  endif;
echo "<br>";
//ternario
$media = 10;
echo($media >=7) ?"Aprovado" :"Reprovado";
echo "<br>";
// switch

$cor = "vemelha";
switch ($cor) :
  case "vermelha":
    echo "sua cor preferida eh $cor";
    break;
  case "verde":
    echo "sua cor preferida eh $cor";
    
/*default serve para executar um thecho de codigo quando nenhuma daa opcoes for verdaeira*/
  default:
    echo "sua cor preferida nao eh nem verde nem vermelha";
    endswitch;
?>