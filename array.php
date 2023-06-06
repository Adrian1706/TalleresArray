<?php
    echo <<<HTML
    <a href="index.html">Volver a la pagina anterior</a>
    <br>
    HTML;
    session_start();
    $array = ["Sateline 1", "Satelite 2", "Satelite 3"];
    if(isset($_POST)){
        $newPlanet = $_POST["planet"];
        array_push($array,$newPlanet);
        echo join(", ", $array);
    }
?>