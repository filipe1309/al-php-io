<?php

$arquivo = fopen('cursos-php.txt', 'a');

$curso = "\nDesign Patterns em PHP: Padrões estruturais";

fwrite($arquivo, $curso);

fclose($arquivo);