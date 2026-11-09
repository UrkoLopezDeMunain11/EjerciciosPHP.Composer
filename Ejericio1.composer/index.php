<?php

    require __DIR__ '/vendor/autoload.php';

    use SebastianBergmann\Timer\Timer; // la libreria donde esta la clase time , el aoutor q la hizo, nmbre de lalibreria y la clase(imortar la clase)

    const TOTAL_NUMEROS = 100000; // constante , valor q no va a cambiar porq lo q nos pide son numeros aleatorios hasta 100000

    $timer = new Timer(); // crea un objeto 
    $timer->start(); // lo arranca

    for ($i = 1; $i <= TOTAL_NUMEROS; $i++) {
        echo random_int(1, 1000000), PHP_EOL; // PHP_EOL salto de linea para que cada numero salgaen una linea distinta , no es necesario ponerlo, sin eso esta bie tambein
    }

    $duracion = $timer->stop(); // pararlo

    echo PHP_EOL;// salto de linea
    echo "Se han mostrado " . TOTAL_NUMEROS . " números aleatorios." . PHP_EOL;// loso numero totales que han aparecido
    echo "Tiempo empleado: " . $duracion->asString() . PHP_EOL; // el tiemo que ha durado
    





?>