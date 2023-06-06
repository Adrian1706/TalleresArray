<?php
    $array = ['nave1'=>1, 'nave2'=>2, 'nave3'=>3, 'nave4'=>4];
    function gravity ($masa){
        echo array_sum($masa) ,": suma de todas las masas <br>";
    }
    array_walk($array,'gravity');
?>