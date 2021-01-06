<?php

require 'MeuFiltro.php';

$arquivosCursos = fopen('lista-cursos.txt', 'r');

// Custom stream filter
stream_filter_register('alura.patterns', MeuFiltro::class);
stream_filter_append($arquivosCursos, 'alura.patterns');

stream_filter_append($arquivosCursos, 'string.toupper');

echo fread($arquivosCursos, filesize('lista-cursos.txt'));
