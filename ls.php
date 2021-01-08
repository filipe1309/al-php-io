<?php

$diretorioAtual = dir('.');

echo "\nDiretorio atual: '{$diretorioAtual->path}'\n";

echo PHP_EOL . 'Arquivos do diretorio atual:' . PHP_EOL;
while ($dir = $diretorioAtual->read()) {
    echo $dir . PHP_EOL;
}