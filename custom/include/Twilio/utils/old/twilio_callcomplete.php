<?php

$fp = fopen('callcomplete.txt', 'a+');

$callResponse = print_r($_REQUEST,true);

fwrite($fp, $callResponse);

fclose($fp);

?>
