<?php

declare(strict_types=1);

namespace Ramon\DipPratica;

interface PagavelInterface{

    public function getRemuneracao(): int;
    public function getCargo(): string;
    
}