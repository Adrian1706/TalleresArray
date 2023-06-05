<?php
    echo <<<HTML
    Planetas: 
    <br>
    <a href="index.html">Volver a la pagina anterior</a>
    HTML;
    if(isset($_POST)){
        $search=$_POST["planet"];
        $number_planets = array_fill(0, $search, 'planeta');
        function imprimir($planeta)
    {
        echo "$planeta...\n";
    }
    echo"<br>";
    array_walk($number_planets,'imprimir');
    }
?>