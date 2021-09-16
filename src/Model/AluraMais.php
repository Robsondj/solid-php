<?php

namespace Alura\Solid\Model;

use Assistivel;

class AluraMais extends Video implements Pontuavel, Assistivel
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' . http_build_query(['categoria' => $this->categoria, 'nome' => $this->nome]);
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
