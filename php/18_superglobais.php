<?php
// SUPERGLOBAIS: podem ser acessadas independente do escopo
//$GLOBALS : serve para acessar ar variaveis de qualquer lugar do script
 $x = 78;
 $y = 56;
 function soma(){
  echo $GLOBALS['X']+$GLOBALS['y']."<br>";
 }
 soma();

//$_SERVER serve para guardar informaçoes de locais de escript, caminhos e cabeçalho
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";

/*
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
//

*/
?>