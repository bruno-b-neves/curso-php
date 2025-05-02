<div class="titulo">Atribuições</div>

<?php
$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;

# exemplo 1
$numero = $numero - 3;
echo '<br>' . $numero;

# exemplo 2
$numero = $numero + 1.5;
echo '<br>' . $numero;

# exemplo 3 - operador unario (pode usar antes ou depois da variavel)
$numero--;
--$numero;
echo '<br>' . $numero;

# exemplo 4 - operador de decremento (pode usar antes ou depois da variavel)
$numero++;
++$numero;
echo '<br>' . $numero;

$numero = 20;
echo '<br>' . $numero; 

# exemplo 5 - atribuição subtrativa
$numero -= 5;
echo '<br>' . $numero;

# exemplo 6 - atribuição de soma
$numero += 5;
echo '<br>' . $numero; 

# exemplo 7 - atribuição de multiplicação
$numero *= 10;
echo '<br>' . $numero; 

# exemplo 8 - atribuição de divisão
$numero /= 2;
echo '<br>' . $numero; 

# exemplo 9 - atribuição de módulo
$numero %= 6;
echo '<br>' . $numero;

# exemplo 10 - atribuição de potencia
$numero **= 4;
echo '<br>' . $numero;

# exemplo 11 - atribuição de concatenação
$numero .= 4;
echo '<br>' . $numero;


$texto = 'Esse é um texto';
echo '<br>' . $texto;

# exemplo 12 - atribuição de concatenação
$texto = $texto . ' qualquer';
echo '<br>' . $texto;

$texto .= ' de verdade!';
echo '<br>' . $texto;

# exemplo 13 - valor padrão
// $varInexistente = 'valor existente';
echo '<br>' . $varInexistente;
echo '<br>';
var_dump($varInexistente);
$valor = $varInexistente ?? 'valor default';
echo '<br>' . $valor;