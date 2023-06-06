<?php
    echo <<<HTML
    <a href="index.html">Volver a la pagina anterior</a>
    <br>
    HTML;
    session_start();
    $array = ["Mercurio", "Venus", "Tierra",  "Marte", "Saturno", "Urano", "Neptuno"];
    $array2 = ["Mercurio", "Marte",  "Jupiter",  "Saturno", "Neptuno", "Pluton"];
    echo "<h1>Primer Sistema</h1>";
    echo join(", ", $array);
    echo "<br>";
    echo "<h1>Segundo Sistema</h1>";
    echo join(", ", $array2);
    echo "<br>";
    echo "<h1>Planetas Únicos</h1>";
    $unicos = array_diff($array, $array2);
    echo join(", ", $unicos);
?>