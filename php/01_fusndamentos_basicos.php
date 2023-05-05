//tags de impressao,comentarios, variaveisne variaveis variaveis
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <title>Fundamentos PHP</title>
</head>
<body>
  <?php
  echo "Meu nome eh Anica <br>";
  print "<br> Meu nome eh Anica <br>";
  //variaveis
  $nome = "Anica Gabrielli";
  $idade = 17;
  $altura = 1.81;
  echo "<br> Meu nome eh $nome, minha altura eh $altura e minha idade eh $idade anos.<br>";
  //alterando dados
  $nome = "João Felipe";
  $idade = 17;
  $altura = 1.98;
  echo "<br> Meu nome eh $nome, minha altura eh $altura m e minha idade eh $idade anos.<br>";
  echo "<hr>";
  $Carro = "Hilux";
  $carro = "Fusca";
  echo $carro;
  echo "<br>";
  echo $Carro;
  echo"<br>";
  /*//nomes validos para variaveis
$nome
$_meunome
$carro10
$nota1
$meu_nome
$meuNome
  //nomes invalidos
$1235nome
$carro*#&
$meu carro*/
  //variaveis variaveis: um valor sera atribuido a uma variavel, e outro valor sera atribyido a aoutra. Depois sera chamado o valor da primwira variavel e sera exibido o valor da outra.
  $bebida = "refrigerante";
  $$bebida = "guaraná";
  echo $refrigerante;
  echo "<br>";
$destino = "cidade";
$$destino = "ilheus";
echo $cidade;
  ?>
</body>
</html>