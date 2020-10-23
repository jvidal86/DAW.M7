<?php

/*
 * Determina el tipus d'error que es mostra en la cosnola
 * durant la execució de l'script
 * E_ERROR: Error fatal en temps d'execució
 * E_WARNING: Advertència en temps d'execució
 * E_NOTICE: Notificació. Pot indicar error o no
 * E_ALL: tots els errors
 */
//error_reporting(E_ERROR);
//error_reporting(E_WARNING);
//error_reporting(E_NOTICE);
error_reporting(E_ALL);

// Declarem una variable no inicialitzada
$var1;

if( isset($var1) ){
    echo "var1 is set.\n";
} else {
    echo "var1 is not set.\n";
}

if( is_null($var1) ){
    echo "var1 is null.\n";
} else {
    echo "var1 is not null.\n";
}

if( empty($var1)){
    echo "var1 is empty.\n";
} else {
    echo "var1 is not empty.\n";
}

//L'ús d'una variable no inicialitzada llença un error

echo $var1 + 10;


echo "\n\nFINAL\n";
echo 'Observa com l\'script ha continuat tot i la variable no estar inicialitzada'
?>
