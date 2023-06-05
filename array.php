<?php
    echo <<<HTML
    Planetas: 
    <br>
    <a href="index.html">Volver a la pagina anterior</a>
    <br>
    HTML;
    $array = ["Mercurio"=>true, "Venus"=>true, "Tierra"=>true, "Marte"=>true, "Jupiter"=>true, "Saturno"=>false, "Urano"=>false, "Neptuno"=>false, "Pluton"=>false];
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