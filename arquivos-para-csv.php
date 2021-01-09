<?php

$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [ trim(utf8_decode($curso)), 'Sim' ];
    fputcsv($arquivoCsv, $linha, ';');
    // fwrite($arquivoCsv, implode(';', $linha));
}

foreach ($outrosCursos as $curso) {
    $linha = [ trim(utf8_decode($curso)), 'Nao' ];
    fputcsv($arquivoCsv, $linha, ';');
    // fwrite($arquivoCsv, implode(';', $linha));
}

fclose($arquivoCsv);


echo "\nResultado no CSV:\n";

$arquivoCsv = fopen('cursos.csv', 'r');

while (($curso = fgetcsv($arquivoCsv)) !== false) {
    var_dump($curso);
}

fclose($arquivoCsv);
