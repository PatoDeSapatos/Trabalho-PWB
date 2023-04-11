<?php
    $arq = fopen("contador.txt",'r+');
    $lercontador =fread($arq,100);
    $contador=floatval($lercontador)+1;
    fseek($arq,0);
    fwrite($arq,$contador);
    echo "<div id='contador'><p>Você é o visitante de número ",$contador,"</p></div> ";
    fclose($arq);
?>