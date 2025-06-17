<div class="titulo">Operações</div>

<?php
// Pode criar array com colchetes[] ou array()
$dados1= [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    'naturalidade' => "Fortaleza"
];

$dados2["endereco"] = "Rua A";

/* 
    A ideia aqui é usar o operador "soma" para que ele junte
    todas as chaves e valores de um array junto com todas as chaves
    e valores do segundo array 
*/

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos); // contar elementos no array

echo '<br>';
$indice = array_rand($dadosCompletos); // indices randomicos
echo "$indice = $dadosCompletos[$indice]";

echo '<br>';
echo "{$dadosCompletos['idade']}"; // Ao definir o par de chaves consegue delimitar aquilo que precisa ser interpolado 
echo " ${dadosCompletos['idade']}";

echo '<br>';
unset($dadosCompletos["nome"]); // remover um elemento do array
print_r($dadosCompletos);

echo '<br>';
unset($dadosCompletos);
print_r($dadosCompletos);
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares); // É mais seguro usar a função 'array_merge()"
echo '<br>';
print_r($decimais);

sort($decimais); // para ordenar o array | ele altera o array original
echo '<br>';
print_r($decimais);
