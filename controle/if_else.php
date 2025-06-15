<div class="titulo">If Else</div>

<?php

if(false)
    echo "Serei impresso"; # Dessa forma só essa linha é interpretada, pois é uma sentença de código
    echo "Serei impresso novamente?";

echo "<br>";

# Para colocar mais sentenças é preciso criar um bloco de código
# 0 é false e 1 e true
if(" ") {
    echo "Fui impresso!";
    echo "<br> Eu também serei impresso?";
}

echo "<br> <br>";

# Abaixo eu posso ter um bloco de código ou manter uma única setença de código
if(false) {
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

echo "<br> <br>";

if(false) {
    echo 'Passo A<br>';
} else if(true) {
    echo 'Passo B<br>';
} else {
    echo 'Último Passo<br>';
}

echo "Fim<br>";