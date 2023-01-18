<?php

if (isset($_GET['iteration'])) {
    $interation = $_GET['iteration'];

    if ($interation > 10){
        $interation = 10;
    }
    else if ($interation <= 0) {
        $interation = 1;
    }

    for($i = 0; $i < $interation; $i++){
        echo "Salut, la valeur est $interation <br>";
    }
} die();
