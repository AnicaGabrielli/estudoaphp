<?php
//*****Escopo global e local***
//o escopo global de uma variavel define a possibilidade de ela ser chamada em outras partes do programa, ja o escopo local somente podera ser chamado dentro.de uma função.

//////////GLOBAL////////
$nome = "Jose de Alencar";
function exibirNome() {
  global $nome;
  echo "$nome";
}
exibirNome();
echo "<br>";
///////////////////////
function exibirCidade() {
  ////Escopo local////
  global $cidade;
  $cidade = "Matina";
}
exibirCidade();
echo $cidade;
echo "<br>";
/////////////////
$a = 2;
$b = 6;
$c = 8;
function soma() {
  echo $GLOBALS['a']+$GLOBALS['b']+$GLOBALS['c'];
}
soma();

?>