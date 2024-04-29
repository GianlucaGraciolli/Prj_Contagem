<?php
// $date = date_create("2013-03-15");
// echo date_format($date, "Y/m/d");
// d, M, m, y, Y, H, i, s

$diaDeHoje = date_create("2024-04-29");
// echo time();
echo date_format($diaDeHoje,"d/M/y");
echo "<br>";
echo date_format($diaDeHoje,"d / m / Y");
echo "<br>";
echo date_format(date_create("now"),"d / m / Y");  

//time() - retorna a data em milisegundos a partir do dia 01 de janeiro de 1970
//strtotime() - transforma uma data string para time
//date_create() - cria uma data a partir de uma string
//date_format() - formata a data mostrada de acordo com o padrão  

?>