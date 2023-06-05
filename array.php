<?php
    echo <<<HTML
    Planetas: 
    <br>
    <a href="index.html">Volver a la pagina anterior</a>
    <br>
    HTML;
    $array = ["Sol"=>274, "Mercurio"=>2.7, "Venus"=>8.8, "Tierra"=>9.8, "Marte"=>3.7, "Jupiter"=>22.8, "Saturno"=>9, "Urano"=>7.7, "Neptuno"=>11];
    if(isset($_POST)){
        $planet=$_POST["planets"];
        function habitables($valor)
        {
            return $valor===true;
        }

        function inhabitable($valor)
        {
            return $valor===false;
        }
    }
    switch ($planet){
        case "si":
            print_r (array_filter($array, "habitables"));
            break;
        case "no":
            print_r (array_filter($array, "inhabitable"));
            break;
    }
?>