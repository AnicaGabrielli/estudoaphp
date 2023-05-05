<?php
/////////////////Arrays/////////

$carros = array("Gol","BMW","Hilux");
print_r($carros);
echo "<br>";

//exibindo pelo indice

echo $carros[2];
echo "<br>";

//criando indice

$carros = array(3=>"Gol",2=>"BMW",1=>"Hilux");
echo $carros[2];
echo "<br>";

//inserindo um elemento e especificando posicao no array

$carros[] = "Amarock";
$carros[7] = "Camaro";
print_r($carros);
echo "<br>";
echo $carros[3];
echo "<br>";

//outra forma de fazer Arrays

$motos = array();
$motos[] = "yamarra";
$motos[] = "Honda";
$motos[12] = "pop";
print_r($motos);
echo "<br>";

//outra forma de fazer Arrays

$clientes =["Felipe","Maria","Ricardo"];
print_r($clientes);

//loopin para percorrer o array

foreach ($carros as $valor){
  echo $valor."<br>";
}
?>