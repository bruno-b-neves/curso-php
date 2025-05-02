<div class="titulo">Constantes</div>

<?php

/* A constante em php chama-se define() */
/* por pordão usar todas as letras maiúsculas e o underline */
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS . '!';
/* TAXA_DE_JUROS = 2.5; */

/* Outra forma é utilizando a palavra reservada "const" */
const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

/* PHP tem uma limitação especifica com relação a atribuição de uma constante */
$valorVariavel = 2.8;
// const NOVISSIMMA_TAXA = $valorVariavel # Não pode ser feito dessa forma
// define('NOVISSIMMA_TAXA', $valorVariavel); # para usar a definição de uma const apartir de uma variavel use somente define()


const NOVISSIMMA_TAXA = 2.8 + 1.2; # pode fazer uma equação matemática
echo '<br>' . NOVISSIMMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br> Linha: ' . __LINE__;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;