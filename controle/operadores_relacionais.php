<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); # "igual" operador relacional
var_dump(1 > 1); # "maior" operador relacional
var_dump(1 >= 1); # "maior ou igual" operador relacional 
var_dump(4 < 23); # "menor" operador relacional
var_dump(1 <= 7); # "menor ou igual" operador relacional
var_dump(1 != 1); # "diferente" operador relacional
var_dump(1 <> 1); # "diferente" operador relacional


var_dump(111 == '111');
var_dump(111 === '111'); # "estritamente igual" operador relacional
var_dump(111 != '111'); # operador relacional
var_dump(111 !== '111'); # "estritamente diferente" operador relacional

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";

$idade = 25;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if($idade < 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo "<p class='divisao'>Spaceship</p><hr>";

var_dump(5 <=> 3); # "spaceship" serve para ordenação
var_dump(50 <=> 50); # "spaceship" serve para ordenação
var_dump(5 <=> 50); # "spaceship" serve para ordenação

echo "<p class='divisao'>Valores pode ser V ou F</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");