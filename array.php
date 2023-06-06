<?php
    echo <<<HTML
    <a href="index.html">Volver a la pagina anterior</a>
    <br>
    HTML;
    session_start();
    $array = ["Mercurio", "Venus", "Tierra",  "Marte",  "Jupiter",  "Saturno", "Urano", "Neptuno", "Pluton"];
    echo "<br> <br>";
    echo join(", ", $array);
    echo "<br> <br>";
    $reves = array_reverse($array);
    echo join(", ", $reves);

?>