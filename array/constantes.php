<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('laranja', 'abacaxi');
// Não consegui criar, acrescentar ou alterar para o que quer
// FRUTAS[0] = "banana";
// FRUTAS[] = "banana";

// Só pode ler os valores
echo FRUTAS[0];

const CARROS = ["fiat" => "uno", "ford" => "fiesta"];
// CARROS["BMW"] = "320i";
echo '<br>' . CARROS["fiat"];

// outra forma de criar, e também não consigo mudar
define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[] = "Rio de Janeiro";
echo '<br>' . CIDADES[1];
