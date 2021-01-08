<?php
$zipFileWithPassUri = 'zip://arquivos_com_senha.zip#lista-cursos.txt';

echo "\nCom file_get_contents():\n";
echo "---\n";

$context = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents($zipFileWithPassUri, false, $context);

echo "\nCom fopen():\n";
echo "---\n";

$listaCursoStream = fopen($zipFileWithPassUri, 'r', false, $context);
fpassthru($listaCursoStream); // Mesma coisa que dar um loop com fgets
/*
...
while (true) {
    $name = fgets($listaCursoStream);
    if (!$name) break;
    echo $name;
}
...
*/

fclose($listaCursoStream);