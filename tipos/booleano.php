<div class="titulo">Tipo Booleano</div>

<?php

/* O valor TRUE no browser converte para 1 */
echo TRUE;
echo '<br>';
/* O valor FALSE no browser não converte */
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazer as regras de conversões
echo '<p>Regras</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero é false
echo '<br>' . var_dump((bool) 20); 
echo '<br>' . var_dump((bool) -1); 
echo '<br>' . var_dump((bool) 0.0); 
echo '<br>' . var_dump((bool) 0.1); 
echo '<br>' . var_dump((bool) ""); // false 
echo '<br>' . var_dump((bool) "0"); // false 
echo '<br>' . var_dump((bool) " "); // todo resto é true
echo '<br>' . var_dump((bool) "00"); 
echo '<br>' . var_dump((bool) "false"); 

echo '<br>' . var_dump(!!"false"); 