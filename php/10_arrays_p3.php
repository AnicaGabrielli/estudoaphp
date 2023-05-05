<?php
////arrays associativos////

//os indices sao strings

 $pessoa = array("Nome" => "Rodrigo", "idade" => 23, "Altura" => 1.85);
 echo $pessoa["Nome"];
 echo "<br>";
 $pessoa["cidade"]="Itabuna";
 print_r($pessoa);
 echo "<br>";
 foreach ($pessoa as $indice=>$valor){
   echo $indice.":".$valor."<br>";
 }
 echo "<br>";
 
 //arrays multidimensionais 
 //sao aqueles que possuem outros arrays dentro
 
 $times= array ( "Carioca"=> array( "campeao"=>"vasco","vice"=>"flamengo", "terceiro lugar"=>"botafogo"), "Paulista"=> array("o melhor"=>"santos","o mais ou menos"=>"sao paulo","o meia boca"=>"palmeiras"),
 "Baianos"=> array("o melhor"=>"bahia","o segundao"=>"vitoria","o terceirao"=>"itabuna"));
 
 
 echo $times["Paulista"][2];
 
 echo "<br>";
 
 foreach ($times["Carioca"] as $indice=>$valor){
   echo $indice.": ".$valor."<br>";
 }
 
 echo "<br>";
 
 foreach ($times["Paulista"] as $indice=>$valor){
   echo $indice.": ".$valor."<br>";
 }
 
 echo "<br>";
 
 foreach ($times["Baianos"] as $indice=>$valor){
   echo $indice.": ".$valor."<br>";
 }
 
?>