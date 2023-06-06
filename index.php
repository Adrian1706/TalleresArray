<?php
    $array = ["Mercurio"=>37.8,"Venus"=> 90.5,"Marte"=> 37.86,"Jupiter"=> 252.96,"Saturno"=> 106.54,"Urano"=> 90.52,"Neptuno"=> 113.8];
    function gravity ($grave){
        echo number_format($grave*0.098,2) ,": gravedad real <br>";
    }
    array_walk($array,'gravity');
?>