<div class="titulo">Mapa</div>

<?php
/* Pode quebrar em linhas ou deixar na mesma linha */
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados); 

echo $dados[0] . '<br>'; // aqui retorna null pois foi definido as chaves do indice

var_dump($dados[0]);

/* Acesso pelas chaves definidas no indice */
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados["outra_informacao"]);

/* 
    Outra situação quando misturar duas formas de acessar
    Cuidado com estruturas da forma abaixo
*/
$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);

/* Para adicionar um elemento na lista - a forma abaixo é o mais indicado */
$lista[] = "i";
echo '<br>';
print_r($lista);

/* Em casos de chaves especificas - a forma abaixo é mais indicado */
$lista["vinte"] = 'j';
echo '<br>';
print_r($lista);


/* Abaixo trará mais confusão que clareza */
// $lista[false] = 'tentei indexar com false';
// echo '<br>';
// print_r($lista);

// $lista[true] = 'tentei indexar com true';
// echo '<br>';
// print_r($lista);
