<?php

declare(strict_types=1);

use Ramon\DipPratica\Funcionario;
use Ramon\DipPratica\Pagamento;
use Ramon\DipPratica\ServicoDePagamento;

require_once "./vendor/autoload.php";


$funcionarioDev = new Funcionario('Desenvolvedor Web', 1500, 100);
$funcionarioRep = new Funcionario('Representante', 2000, 1500);

$pagamentoDev = new Pagamento($funcionarioDev);
$pagamentoRep = new Pagamento($funcionarioRep);

$servicoDepagamento = new ServicoDePagamento($funcionarioRep, $pagamentoRep);
$servicoDepagamento->preparaPagamento()->pagar();