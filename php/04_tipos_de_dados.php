<html lang="pt-br">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <title>Tipos de dados</title>
</head>
<body>
  <?php

  //*********Escalares********
  //Strings

  //exemplo 1
  $nome = "Olá mundo!";
  var_dump($nome);
  echo "<br>";
  if (is_string ($nome)):
  echo "Eh uma string";
  else :
  echo "Nao eh uma string";
  endif;
  echo "<br>";
  echo "<br>";

  //Exemplo 2
  $peso = 134;
  var_dump($peso);
  echo "<br>";
  if (is_int($peso)):
  echo "Eh um inteiro <br>";
  else :
  echo "Nao eh um inteiro";
  endif;
  echo "<br>";
  echo "<hr>";

  //int
  $idade = -67;
  var_dump($idade);
  echo "<br>";
  if (is_int ($idade)):
  echo "Eh um inteiro <br>";
  else :
  echo "Nao eh um inteiro";
  endif;
  echo "<hr>";

  //float
  $altura = 1.56;
  var_dump($altura);
  echo "<br>";
  if (is_float ($altura)):
  echo "Eh um float <br>";
  else :
  echo "Nao eh um float";
  endif;
  echo "<hr>";

  //boolean
  $admin = true;
  var_dump($admin);
  if (is_bool ($admin)):
  echo "Eh um boolean <br>";
  else :
  echo "Nao eh um boolean";
  endif;
  echo "<br>";
  $admini = false;
  var_dump($admini);
  if (is_bool ($admini)):
  echo "Eh um boolean <br>";
  else :
  echo "Nao eh um boolean";
  endif;
  echo "<hr>";
  echo "br";

  //**********compostos********
  //arrays
  $carros = array("gol", "uno", "camaro", 12, 20.6, true);
  var_dump($carros);
  echo "<br>";
  if (is_array ($carros)):
  echo "Eh um array";
  else :
  echo "Nao eh um array";
  endif;
  
    //*******especiais*******
  $moradia = NULL;
  var_dump($moradia);
  echo "<hr>";
    echo "<hr>";
 
    //object
  class Cliente {
    public $nome;
    public function atribuirNome ($nome) {
      $this->$nome = $nome;
    }
  }
  $cliente = new Cliente();
  $cliente = atribuirNome("Rodrigo");
  var_dump($cliente);


  //*******especiais*******
  $moradia = NULL;
  var_dump($moradia);
  echo "<hr>";
    echo "<hr>";
 


  ?>



</body>
</head>