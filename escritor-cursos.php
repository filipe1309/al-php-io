<?php

$curso1 = 'Design Patterns em PHP: Padrões comportamentais';
file_put_contents('cursos-php.txt', $curso1);

$curso2 = "\nDesign Patterns em PHP: Padrões estruturais";
file_put_contents('cursos-php.txt', $curso2, FILE_APPEND);
