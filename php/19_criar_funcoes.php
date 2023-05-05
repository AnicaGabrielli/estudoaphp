<?php
//funcao
 function exibirNome(){
 echo "Meu nome eh Anica";
 }
 exibirNome();
 echo "<br>";
 
 // passando parametro
 function exibir_nome($nome) {
 echo "Meu nome eh $nome";
 }
 exibir_nome("Felipe Castro");
 echo "<br>";
 
 //calculando mefia

 function Calcular_media($nome,$n1,$n2,$n3,$n4){
   $media = ($n1+$n2+$n3+$n4)/4;
   if ($media >= 7): 
     echo "$nome foi aoprovado(a) com a seguinte media:$media";
     else: 
       echo "$nome foi reprovado(a)";
       endif;
 }
 Calcular_media("Hariádina",6,7,8,9);
?>