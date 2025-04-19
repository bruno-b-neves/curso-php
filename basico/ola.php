<div class="titulo">Olá PHP</div>

<h3>Exemplo A</h3>
<?php
    /* Isso é uma sentença de código, então termina com ";" */
    /* "\n" quebra de linha */
    echo 'Olá ';
    /* echo "\n"; */
    echo 'Mundo! <br />';
?>

<!-- Sintaxe resumida com tag de "encurtamento" -->
 <!-- Nessa tag eu só coloco o quero imprimir diretamente
    no brownser
 -->
<h3>Exemplo B</h3>
<?= "Outra forma de me 'expressar' <br />"; ?>
<?= 2 * 3 + 3 ?>

<!-- Você pode abrir uma tag php e não é obrigatorio fechar -->
<?php
    phpinfo();