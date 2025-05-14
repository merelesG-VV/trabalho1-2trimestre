<?php
require_once 'models/Cliente.php';
require_once 'models/Vendedor.php';
require_once 'models/Carro.php';

$cliente = new Cliente("Carlos");
$vendedor = new Vendedor("Pedro");
$carro = new Carro("Fusion", "Ford");

echo "=== Informações ===\n";
$cliente->exibirNome();
$vendedor->exibirNome();
$carro->exibirDetalhes();

echo "\n=== Compra ===\n";
$cliente->comprarCarro($carro, $vendedor);
?>