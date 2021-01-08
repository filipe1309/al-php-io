<?php

$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-Type: text/plain",
        'content' => 'Teste do corpo'
    ]
]);

$httpbinUri = 'http://httpbin.org/post';
echo file_get_contents($httpbinUri, false, $context);