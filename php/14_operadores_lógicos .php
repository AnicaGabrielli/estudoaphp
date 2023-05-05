<?php
/*operadores logicos nos peemitem.fazer comparacoes entre expressoes
*E (&& - and); as expresoes verdaeirad
*OU (|| - or); uma das expressoes verdaeiras
*OU EXCLUSIVO (xor);somente uma das expressoes verdaeiras
*NEGACAO (!); nega uma das espressoes
*/
$idade = 29;
$nome = "Rodrigo";
if(($idade == 29) and ($nome == "Rodrigo")):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
    echo "<br>";
    
    if(($idade == 27) || ($nome == "Rodrigo")):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
    echo "<br>";
    
    if(($idade == 29) xor ($nome == "Rodrigo")):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
    echo "<br>";
    
    if(!($idade == 27) and ($nome == "Rodrigo")):
  echo "Positivo";
  else:
    echo "Negativo";
    endif;
    echo "<br>";
?>