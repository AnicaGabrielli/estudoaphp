<?php
$nome ="doroteia";
var_dump($nome);
if(is_string($nome)):
echo "eh uma string";
else:"nao eh uma string";
endif;
echo "
------------------------------------------------------------------------------------------------------------
";
//int
$idade =27;
var_dump($idade);
if(is_int($idade)):
    echo "eh um inteiro";
    else: echo "nao eh um inteiro";
    endif;
    echo "
------------------------------------------------------------------------------------------------------------
";
//float
$altura = 1.66;
var_dump($altura);
if(is_float ($altura)):
    echo "eh um float";
    else:
        echo "nao eh um float";
        endif;
        echo "
------------------------------------------------------------------------------------------------------------
";
$admin = false;
var_dump ($admin);
if (is_bool($admin)):
    echo "eh un boolean";
    else: 
        echo "nao eh um boolean";
        endif;
        echo "
------------------------------------------------------------------------------------------------------------
";
?>
