<?php

$arquivo = fopen('cursos-php.txt', 'w');

$curso = 'Design Patterns em PHP: Padrões comportamentais';

fwrite($arquivo, $curso);

fclose($arquivo);