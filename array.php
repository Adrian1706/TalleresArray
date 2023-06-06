<?php
    echo <<<HTML
    <a href="index.html">Volver a la pagina anterior</a>
    <br>
    HTML;
    session_start();
    $array = ["Nave 1", "nave 1", "Nave 2", "nave 2", "Nave 3", "nave 3"];
    if(isset($_POST["flota"])){
        $naves=$_POST["flota"];
        if(in_array($naves, $array)){
            echo "<h1>$naves</h1>", "<p> Esta nave existe en mi flota.</p>";
        }else{
            echo $naves, "<p> Esta nave no existe en mi flota.</p>";
        };
    };
?>