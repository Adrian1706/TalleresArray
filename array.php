<?php
    echo <<<HTML
    Nombre Del Planeta Buscado: <a href="index.html"></a>
    HTML;
    $planetas = ["Sol"=>1, "Mercurio"=>2, "Venus"=>3, "Tierra"=>4, "Marte"=>5, "Jupiter"=>6, "Saturno"=>7, "Urano"=>8, "Neptuno"=>9, "Pluton"=>10];
    
    if(isset($_POST)){
        $search=$_POST["planet"];
            $planetsO = array_flip($planetas);
            echo "$planetsO[$search]";
    };
?>