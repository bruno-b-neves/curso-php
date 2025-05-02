<div class="titulo">Variáveis</div>

<?php
# A variável PHP obrigatoriamente começa com $
# As variáveis são case sensitive

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3; // isso é uma atribuição
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;


echo '<br>';
echo isset($somaDosNumeros);

echo '<br>';
unset($somaDosNumeros);
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = 'Agora sou uma string!';
echo '<br>' . $variavel;

// Nomes de variável

$var = 'valida';

# pode usar nome + número
$var2 = 'valida';

# pode usar letras maiúsculas
$VAR3 = 'valida';

# pode usar underline e inclusive iniciar a variavel com underline
$_var_4 = 'valida';

# pode usar letras com acentuações (não recomendado)
$vàr5 = 'valida';

# não é valido começar com número
// $6var = 'invalida'

# não é valido começar com porcentagem
// $%var7 = 'invalida' 

# não é valido porcentagem
// $var8% = 'invalida'

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
