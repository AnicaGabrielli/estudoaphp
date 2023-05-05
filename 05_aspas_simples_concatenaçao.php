<?php
//*****Aspas Simples*****
//Sao literais, portanto interpretam qual variavel como texto nao a interpretando.
$nome = 'Rodrigo leao';
echo 'Meu nome eh $nome';
echo "<br>";
//****Concatenacao****
$nome = 'Rodrigo leao';
echo 'Meu nome eh '.$nome.'e minha idade eh  23';
echo "<br>";
$nome = 'Rodrigo leao';
echo 'Meu nome eh '.$nome.'e minha idade eh  \'23\'';
echo '<br>';
//******Aspas duplas******
$nome = 'Rodrigo leao';
echo "Meu nome eh $nome";
echo "<br>";
$nome = 'Rodrigo leao';
echo "Meu nome eh \"$nome\"";
echo "<br>";
?>