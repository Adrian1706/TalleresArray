<?php
    echo <<<HTML
    <a href="index.html">Volver a la pagina anterior</a>
    <br>
    HTML;
    session_start();
    $array = ["Mercurio", "Venus", "Tierra",  "Marte",  "Jupiter",  "Saturno", "Urano", "Neptuno", "Pluton"];
    $random = array_rand($array, 2);
    if (isset($_POST['submit'])) { 
        echo"El planeta que se eligio para la mision es: ", $array[$random[0]];
    }
?>