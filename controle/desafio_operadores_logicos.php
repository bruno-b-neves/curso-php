<div class="titulo">Desafio Operadores Lógicos</div>
 
<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois trabalhos forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="" disabled>Selecione uma opção</option>
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="" disabled>Selecione uma opção</option>
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
// Para conseguir obter informação
/* echo $_POST['t1'];
echo $_POST['t2']; */ // Isso é uma string

$t1 = $_POST['t1'];
$t2 = $_POST['t2'];


if ($_POST['t1'] && $_POST['t2']) {
    if ($t1 === '1' && $t2 === '1') {
        echo "<p>Comprar TV 50' e tomar sorvete</p>";
    } elseif ($t1 === '1' && $t2 === '0' || $t1 === '0' && $t2 === '1') {
        echo "<p>Comprar TV 32' e tomar sorvete</p>";
    } else {
        echo "<p>Fica em casa mais saudável</p>";
    }
}
