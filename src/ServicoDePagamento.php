<?php

declare(strict_types=1);

namespace Ramon\DipPratica;

class ServicoDePagamento
{
    public function __construct(
        private PagavelInterface $quemRecebe,
        private PagadorInterface $quemPaga
    ) {

    }

    public function preparaPagamento(): static
    {
        $this->quemPaga->setPagavel($this->quemRecebe);

        return $this;
    }

    public function pagar(): void
    {
        $cargo = $this->quemRecebe->getCargo();

        $valor = $this->quemPaga->getSalario();

        echo "Estou pagando o {$cargo} o valor de {$valor}" . PHP_EOL;
    }
}
