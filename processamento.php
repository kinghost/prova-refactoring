<?php 

require __DIR__ . '/vendor/autoload.php';

$config = new Unipago\Config();

$processamento = new Unipago\ProcessamentoRetorno($config);
$processamento->processar();