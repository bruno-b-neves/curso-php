<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

// Atribuição por VALOR
$variavelValor = $variavel;
echo "<br>$variavelValor";

$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

// Atribuição por REFERÊNCIA
$variavelReferencia = &$variavel; # "&" define uma referencia
$variavelReferencia = 'mesma referencia';

echo "<br> $variavel";
echo " $variavelReferencia";
