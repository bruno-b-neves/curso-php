<div class="titulo">Operadores Lógiccos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p>";
var_dump(true);
echo '<br>';
var_dump(!true); // ! converte para false seria o operador unário not

echo "<p class='divisao'>Tabela Verdade do 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

// outro tipo que pode ser aplicado
var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p class='divisao'>Tabela Verdade do 'OR' (OU)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

// outro tipo que pode ser aplicado
var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p class='divisao'>Tabela Verdade do 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

// outro tipo que pode ser aplicado
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';

if ($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}

