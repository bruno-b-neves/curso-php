<div class="titulo">Desafio Precedência</div>

<?php

echo '<p> 1. Qual valor será impresso?</p>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3); // INFINITE

echo '<p> 1. Qual expressão imprime o valor 100?</p>';
echo 'a) ', (1 + 2) * 20 - 15, '<br>'; // 45
echo 'b) ', 4 * 5 ** 2, '<br>'; // 100
echo 'c) ', 2 ** 3 ** 4 / 1e25, '<br>'; // 0.2417...
echo 'd) ', 3 + (3 * 8) / 2 - 3, '<br>'; // 12
