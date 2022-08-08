<?php

declare(strict_types=1);

namespace Ramon\DipPratica;

class Pagamento implements PagadorInterface
{
    public function __construct(
        private PagavelInterface $pagavel,
    ) {
        
    }

    public function getSalario(): int
    {
        return $this->pagavel->getRemuneracao();
    }

    public function setPagavel(PagavelInterface $pagavel): void
    {
        $this->pagavel = $pagavel;
    }
}