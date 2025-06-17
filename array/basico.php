<div class="titulo">Array</div>

<?php
/* 
    Array é uma estrutura unidimensional ou multidimensional, que a partir de uma unica
    referencia pode associar multiplos valores.
    Nessa aula vamos utilizar o Array organizando os dados a partir de um indice (estrutura indexada)
    cada elemento pertencene ao Array terá seu próprio indice começando de 0
*/

$lista = array(1, 2, 3.4, "texto");
echo $lista . '<br>'; // não é interessante mostrar array assim
var_dump($lista);  // essa é uma solução intermediaria
echo '<br/>';
print_r($lista); // a forma mais interessante
echo '<br/>';

$lista[0] = 1234; // pode alterar um valor do array atraves dos indice
print_r($lista); // a forma mais interessante



/* Como acessar um elemento dentro do array */

echo '<br>' . $lista[0]; // acessa o primeiro  elemento do  array
echo '<br>' . $lista[1]; // acessa o segundo  elemento do  array
echo '<br>' . $lista[2]; // acessa o terceiro  elemento do  array
echo '<br>' . $lista[3]; // acessa o quarto  elemento do  array
echo '<br>'; 
var_dump($lista[4]); // retorna um valor null

/* 
    Você pode acessar as letras de uma frase usando a notação "[] (Colchetes)"
    entretanto isso não é interessante pois a acentuação(incode) gerará problema
*/

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[3];
echo '<br>' . $texto[2];
// echo '<br>' . $texto[10]; // gerou problema pois "acentuação" conta 2 caracteres
echo '<br>' . $texto[11];
echo '<br>' . mb_substr($texto, 10, 1); // essa seria a melhor forma