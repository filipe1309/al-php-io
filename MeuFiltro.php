<?php


class MeuFiltro extends  php_user_filter
{
    public  $stream;
    public function onCreate()
    {
        // stream temporario para o $out
        $this->stream = fopen('php://temp', 'w+');
        return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, $closing)
    {
        $saida = '';
        // $in (stream de entrada) poder vir em 1 ou n buckets
        while ($bucket = stream_bucket_make_writeable($in)) {
            $linhas = explode("\n", $bucket->data);

            foreach ($linhas as $linha) {
                if (stripos($linha, 'Patterns')) {
                    $saida .= "$linha\n";
                }
            }
        }

        // $out precisa de outro stream para ser enviado
        $bucketSaida = stream_bucket_new($this->stream, $saida);
        stream_bucket_append($out, $bucketSaida);

        // Indica que o filtro foi executado com sucesso
        return PSFS_PASS_ON;
    }
}