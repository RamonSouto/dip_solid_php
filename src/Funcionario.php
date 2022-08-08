<?php

declare(strict_types=1);

namespace Ramon\DipPratica;

class Funcionario implements PagavelInterface
{
    public function __construct(
        private string $cargo,
        private int $salario,
        private int $comissao = 0
    ) {
        
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function getRemuneracao(): int
    {
        if($this->getCargo() === "Representante"){
            return $this->salario + $this->comissao;
        }

        return $this->salario;
    }
}