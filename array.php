<?php
    echo <<<HTML
    <a href="index.html">Volver a la pagina anterior</a>
    <br>
    HTML;
    session_start();
    $array = ["especie1", "especie1", "especie2",  "especie3",  "especie4",  "especie4", "especie5"];
    print_r($array);
    echo "<br>";
    $unicos = array_unique($array);
    print_r ($unicos);
?>