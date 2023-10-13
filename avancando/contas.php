<?php

$contas1 = [
    "titular" => "Lucas",
    "saldo" => 1000,
    "cargo" => "CEO"
];

$contas2 = [
    "titular" => "João",
    "saldo" => 19.000,
    "cargo" => "CEO"
];

$contas3 = [
    "titular" => "Leite",
    "saldo" => 7000,
    "cargo" => "Pleno"
];

$todasAsContas = [$contas1, $contas2, $contas3];

for($i = 0; $i <count($todasAsContas) ; $i++)
{    
    echo "Titular: " . $todasAsContas[$i]["titular"] . PHP_EOL;
    echo "Saldo: " . $todasAsContas[$i]["saldo"] . PHP_EOL;
    echo "Cargo: " . $todasAsContas[$i]["cargo"] . PHP_EOL;
    echo "---------------------" . PHP_EOL;
}