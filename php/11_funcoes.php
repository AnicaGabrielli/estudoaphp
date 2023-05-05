<?php
//is_array($array) verifica se a funcao e um array 
$nomes = array("João","José","Mateus");
echo is_array($nomes);
echo "<br>";
//in_array(valor,$array) verifiaca se o valor existe em alguma posicao do array
echo in_array("José",$nomes);
echo "<br>";
if (in_array("Maria", $nomes)):
  echo "existe no array";
  else:
    echo "nao existe";
    endif;
    echo "<br>";
  //array_keys serve para atribuir novoa indices ao array anterios e colocar os infices dele como valor;
  $nomes = array("Pai"=>"João","Primo"=>"José","Marido"=>"Mateus");
   $keys = array_keys($nomes);
   print_r($keys);
   echo "<br>";
//array_values($array) retorna um novo array com os valores do anterior como parametro
$values= array_values($nomes);
print_r($values);
echo "<br>";
// array_merge($array1, $array) agrega os valores dos dois arrays 
$carros = array("Camaro","BMW","Gol");
$motos = array("Pop100","200cc", "cb1000");
$veiculos = array_merge($carros,$motos);
print_r($veiculos);
echo "<br>";
//array_pop serve para excluir o ultimo item do array
$carros = array("Camaro","BMW","Gol");
print_r($carros);
echo "<br>";
 echo array_pop($carros);
 echo "<br>";
print_r($carros);
//array_shift serve para excluir o primeiro item do array
$carros = array("Camaro","BMW","Gol");
print_r($carros);
echo "<br>";
 echo array_shift($carros);
 echo "<br>";
print_r($carros);

//array_unshift serve para adicionar elementos no inicio do array
$carros = array("Camaro","BMW","Gol");
print_r($carros);
echo "<br>";
 echo array_unshift($carros, "Uno");
 echo "<br>";
print_r($carros);
echo "<br>";
//array_push serve para adicionar elementos no final do array
$carros = array("Camaro","BMW","Gol");
print_r($carros);
echo "<br>";
 echo array_push($carros, "Uno");
 echo "<br>";
print_r($carros);
echo  "<br>";

//O array_combine($keys,$values) serve para mesclar elementos de dois arrays.
$keys = array("Campeao","Vice","Terceiro");
$values = array("Flamengo","Palmeiras","Vasco");
$times = array_combine($keys,$values);
print_r($times);
echo "<br>";

//array_sum serve para somar os elementos de um array
$valores = array(4,5,6,7,8,9,12);
$total = array_sum($valores);
echo $total;
echo "<br>";
// o explode("parametro", $vatiavel) serve para tranformar uma variavel em um array.

//exemplo1
$Data = "20/12/12";
$novaData = explode("/", $Data);
print_r($novaData);
echo "<br>";

//exemplo2
$frase = "Meu nome nao eh jhonny !";
$novafrase = explode(" ", $frase);
print_r($novafrase);
echo "<br>";
// o implode("parametro", $array) serve para tranformar um array em uma variavel
$nomes = array("Anica", "Gabrielli", "Pereira", "Santos");
$string = implode(", ", $nomes);
print_r($string);

?>
