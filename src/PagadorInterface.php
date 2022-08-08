<?php

declare(strict_types=1);

namespace Ramon\DipPratica;

interface PagadorInterface{

    public function setPagavel(PagavelInterface $pagavel): void;
    public function getSalario(): int;
    
}