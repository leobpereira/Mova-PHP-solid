<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Assistivel;

// Essa função apenas quer assistir o curso, não quer saber como recupera os vídeos ou como funciona
// o processo de assistir. Esse é o conceito de encapsulamento
class Assistidor
{
    public function assistir(Assistivel $conteudo)
    {
        $conteudo->assistir();
    }
}
