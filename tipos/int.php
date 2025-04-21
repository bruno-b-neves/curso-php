<div class="titulo">Tipo Inteiro</div>

<?php
echo 11;
/* via browser utiliza <br>, resultados no terminal \n */
echo '<br>';

/* var_dump() exibe informações sobre uma varíavel */
var_dump(11);
echo '<br>';

/* para pegar o inteiro máximo suportado pelo php na máquina de 32x ou 64x */
echo PHP_INT_MAX, '<br>';
/* para pegar o inteiro minímo suportado pelo php na máquina de 32x ou 64x */
echo PHP_INT_MIN, '<br>';

echo 011, '<br>'; // base octal
echo 0b11, '<br>'; // base binária
echo 0x11, '<br>'; // base hexa