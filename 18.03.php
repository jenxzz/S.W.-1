<?php
    //Primerio exercício de tabuada
    $a = $_POST ["a"];
    //Segundo exercício de maior número
    $b = $_POST ["b"];
    $c = $_POST ["c"];
    $d = $_POST ["d"];

    //Ex. 1
    echo ("<h1> Tabuada do $a: <br>___________________________");
    for ($i = 1; $i <= 10; $i++) {
        $r = $a * $i;
        echo ("<h2> $a * $i = $r <br>");        
    }

    //Ex. 2
    $m = $b;

    if ($c > $m) {
        $m = $c;
    }

    if ($d > $m) {
        $m = $d;
    }

    echo ("<h1>___________________________ <br> O maior número é: $m");
?>