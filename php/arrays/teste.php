<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres',
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral = $nomeNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;

sort($array);