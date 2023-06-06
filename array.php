<?php
    echo <<<HTML
    <a href="index.html">Volver a la pagina anterior</a>
    <br>
    HTML;
    session_start();
    $array = ["Mercurio", "mercurio", "Venus", "venus", "Tierra", "tierra", "Marte", "marte", "Jupiter", "jupiter", "Saturno", "saturno", "Urano", "urano", "Neptuno", "neptuno", "Pluton", "pluton"];
    if(isset($_POST["planet"])){
        $planetas=$_POST["planet"];
        if(in_array($planetas, $array)){
            echo "<h1>$planetas</h1>", "<p> Este planeta existe en el sistema solar.</p>";
        }else{
            echo $planetas, "<p> Este planeta no existe en el sistema solar.</p>";
        };
    };
?>