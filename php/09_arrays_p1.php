<?php
///////count//////

//essa funcao exibe a quantidade de elememtos que existe em um array

$carros = array("Gol", "ferrari","BMW","Hilux");
$carros[] = "Amarock";
$carros[7] = "Camaro";
print_r($carros);
echo "<br>";
echo count($carros);
echo "<br>";

//atribuindo o valor de count a uma variavel

$totalCarros = count($carros);
echo $totalCarros;
echo "<br>";

//criando loopins para percorrer arrays

foreach($carros as $valor){
  echo $valor."<br";
}
?>