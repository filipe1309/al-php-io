<?php

// $tela = fopen('php://stdout', 'w');
$tela = STDOUT;
fwrite($tela, "Olá Mundo!\n");

fwrite(STDERR, "Errou!!\n");

$cursos = fopen('zip://arquivos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);

