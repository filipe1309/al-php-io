<?php

$arquivosCursos = new SplFileObject('cursos.csv');

while(!$arquivosCursos->eof()) {
    $linha = $arquivosCursos->fgetcsv(';');
    echo $linha[0] . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivosCursos->getCTime());
echo $date->format('d/m/Y');
