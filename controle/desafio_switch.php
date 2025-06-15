<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param" />
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metros-km">Metros > Km</option>
        <option value="km-metros">Km > Metros</option>
        <option value="celsius-fahrenheit">ºC > ºF</option>
        <option value="fahrenheit-celsius">ºF > ºC</option>
    </select>
    <button type="submit">Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
if (isset($_POST['conversao']) && isset($_POST['param'])) {
    $tipoConversao = $_POST['conversao'];
    $param = floatval($_POST['param']);

    switch ($tipoConversao) {
        case 'km-milha':
            $resultado = $param * 0.621371;
            echo "$param quilômetros equivalem a $resultado milhas.";
            break;
        case 'milha-km':
            $resultado = $param * 1.609344;
            echo "$param milhas equivalem a $resultado quilômetros.";
            break;
        case 'metros-km':
            $resultado = $param / 1000;
            echo "$param metros equivalem a $resultado quilômetros.";
            break;
        case 'km-metros':
            $resultado = $param * 1000;
            echo "$param quilômetros equivalem a $resultado metros.";
            break;
        case 'celsius-fahrenheit':
            $resultado = ($param * 9 / 5) + 32;
            echo "{$param}ºC equivalem a {$resultado}ºF.";
            break;
        case 'fahrenheit-celsius':
            $resultado = ($param - 32) * 5 / 9;
            echo "{$param}ºF equivalem a {$resultado}ºC.";
            break;
        default:
            echo "Nenhum valor calculado!";
            break;
    }
}

