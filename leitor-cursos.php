<?php

$arquivo = fopen('lista-cursos.txt', 'r');

// Ok para arquivos pequenos
// Perigo de alto consumo de memória,
// pois se o arquivo for muito grande irá colocar todo em memória 
// sendo que o limite padrão do php é de 128MB
$tamanhoDoArquivoBytes = filesize('lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivoBytes);

echo $cursos;

fclose($arquivo);