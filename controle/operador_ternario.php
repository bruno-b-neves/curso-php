<div class="titulo">Operador Ternário</div>

<?php

$idade = 70;
$status;

if ($idade >= 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}

echo "$status<br>";

// Operador ternário (condição ? true : false)
$idade = 17;
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
echo "$status<br>";

// A forma abaixo é mais indicado quebrar em sentenças de código
// $status = $idade >= 18 ? ($idade >= 65 ? 'Aposentado' : 'Maior de idade') : 'Menor de Idade';

// Quebrando em sentenças de código o exemplo acima
$idade = 75;
$tipoMaiorIdade = $idade >= 65 ? 'Aposentado' : 'Maior de idade';
$status = $idade >= 18 ? $tipoMaiorIdade : 'Menor de Idade';

echo "$status";
