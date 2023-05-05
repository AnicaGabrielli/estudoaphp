<?php

//estrutura de repeticao

//while ira repitie um trecho de codigo enquanto aquela condicao for verdadeira

$tempoMeses= 1;
while ($tempoMeses <= 6):
  echo "Já se passaram $tempoMeses mes (s)! o quanto ve conseguiu melhorar? me conte.<br>";
  $tempoMeses++;
  endwhile;
  echo "<br>";
// o do while ira executar um trecho de codigo, depois fara a verificaçao
$melhora = 1;
do {
  echo "Minha melhora foi de $melhora % hoje! <br>";
  $melhora++;
}while ($melhora <= 100);
echo "<br>";
// o for eh para quando ja se sabe  a quantidade de repeticoes

for($anos=0; $anos<=17; $anos++):
  echo " Progreçao da minha idade: $anos anos.";
  endfor;
  echo "<br>";
  echo "<br>";
  //tabuada
  for($contador=0; $contador<=10; $contador++):
  echo "8×$contador = ".($contador*8)."<br>";
  endfor;
  echo "<br>";
  echo "<br>";
  //foreach siginifica "para cada" e eh utilizado para percorrer arrays; o as atribui os itens de uma array a uma variavel;

$cores = array("azul ","amarelo ","vermelho ", "roxo ");
foreach ($cores as $valor):
  echo $valor."<br>";
  endforeach;
    echo "<br>";
  echo "<br>";
  $outcores = array("preto ","cinza ","verde", "dourado ");
foreach ($outcores as $indice => $valor):
  echo $indice."-".$valor."<br>";
  endforeach;
    echo "<br>";
  echo "<br>";

?>