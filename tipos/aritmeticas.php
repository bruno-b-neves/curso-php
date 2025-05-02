<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';

echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';

/* Nessa operação ela tira as casas decimais (parte quebrada) e traz números inteiros */
echo intdiv(7, 4), '<br>';

/* Caso queira arredondar usar round() */
echo round(7 / 4), '<br>';

/* Caso queira o resto da divisão usar % (módulo da divisão) */
echo 7 % 4, '<br>';
echo 7 % 2, '<br>';
echo 8 % 2, '<br>';
echo 7 / 0, '<br>';
/* echo intdiv(7, 0); # erro! */
/* Para exponenciação usar ** */
echo 4 ** 2;

// Precedência de operadores
// () => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>'; // 14
echo (2 + 3) * 4, '<br>'; // 20
echo 2 + 3 * 4 ** 2, '<br>'; // 50
echo ((2 + 3) * 4) ** 2; // 400

