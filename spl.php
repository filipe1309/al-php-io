<?php

echo 'SplFileObject read csv:' . PHP_EOL;

$arquivosCursos = new SplFileObject('cursos.csv');

while(!$arquivosCursos->eof()) {
    $linha = $arquivosCursos->fgetcsv(';');
    echo $linha[0] . PHP_EOL;
}

echo 'SplFileObject get ewxtra info from file:' . PHP_EOL;

$date = new DateTime();
$date->setTimestamp($arquivosCursos->getCTime());
echo $date->format('d/m/Y') . PHP_EOL;


echo PHP_EOL . 'SplFileObject with iterator:' . PHP_EOL;

$arquivosCursos = new SplFileObject('cursos-php.txt');

foreach($arquivosCursos as $curso) {
    echo $curso;
}
