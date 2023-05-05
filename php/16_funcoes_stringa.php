<?php
/*Funcoes para sttings*/

/*1. strtoupper serve pra converter a string em maiuscula*/
$nome = "deus tenha misericordia";
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<br>";
/*2. strtolower serve pra converter a string em minuscula*/
$nome = "JESUS AMADO";
$novoNome = strtolower($nome);
echo $novoNome;
echo "<br>";
/*3. substr serve para retornar parte da string a partir de um caracter(cardinal). eh possivel tambem dar a quantidade de caracteres que queremos.
*/
$linda= "Anica Gabrielli";
echo substr($linda,3, 12);
echo "<br>";
/*4. str_pad serve para adicionar espacos, caracteres e decidir em que posicoes eles vao ficar.*/
$objeto = "minhavida";
$novoObjeto = str_pad($objeto,18,"©", STR_PAD_LEFT);
echo $novoObjeto;
echo "<br>";
/*5. str_repeat serve para relitir uma estring*/
$Quero = str_repeat("@Paz e amor,  ",10);
echo $Quero;
echo "<br>";
/*6 strlen serve para retornar o tamho da string*/
$desejo = "amor à vida";
echo strlen($desejo);
echo "<br>";
/*str_replace serve para substituir uma palavra em um texto*/
$texto = "Amor da minha vida, daqui ate a eternidade, nossos destinos foram traçados na maternidade";
$novo_texto = str_replace("maternidade","maioridade", $texto);
echo $texto;
echo "<br>";
/*5. strpos retorna a posiçao da palavra em um texto*/
echo strpos($texto,"maternidade");
?>