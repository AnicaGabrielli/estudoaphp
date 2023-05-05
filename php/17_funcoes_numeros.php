<?php
/*1. number_format($variavel, casas decimais, separador de decimais,separador de milhar);*/

$db = 1234.56;
$preço = number_format($db,2,",",".");
echo $preço." R$";
echo "<br>";

/*2. round serve para arredondar valores*/
echo round(5.5);
echo "<br>";

/* 3. ceil arredonda valores para cima*/
echo ceil(8.1);
echo "<br>";

/* 4. floor arredonda valores para baixo*/
echo floor(8.999);
echo "<br>";
/* 5. rand imprime valores aleatorios dentro de uma faixa*/
echo rand(1,89);
echo "<br>";
?>