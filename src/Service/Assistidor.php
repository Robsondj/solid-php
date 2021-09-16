<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Curso;
use Alura\Solid\Model\Assistivel;

class Assistidor
{
    public function assiste(Assistivel $conteudo)
    {
        $conteudo->assistir();
    }
}
