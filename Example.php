<?php

require_once "vendor/autoload.php";

use Emso\CepX\Search;

$busca = new Search;

$resultado = $busca->searchAddress('01001xxxxxx000', 'json');

echo "<pre>\n---------------------- begin JSON ----------------------\n";
var_dump($resultado);
echo "\n---------------------- end JSON ----------------------\n";


$resultado = $busca->searchAddress('010 $Ry 01000', 'xml');

echo "\n---------------------- begin XML ----------------------\n";
var_dump($resultado);
echo "\n---------------------- end XML ----------------------\n";


$resultado = $busca->searchAddress('010 abc 010 x-00', 'js');

echo "\n---------------------- begin JS ----------------------\n";
var_dump($resultado);
echo "\n---------------------- end JS ----------------------\n";


echo "\n\n---------------------- exemplo abaixo retorna erro ----------------------\n\n";
$resultado = $busca->searchAddress('999', 'json');
print_r($resultado);
echo "</pre>";