# Funcions Internes de PHP

## Funcions sobre Variables

| funció | Descripció |
|--------|------------|
| is_null($var) | retorna TRUE si $var es NULL |
|isset($var) | retirna TRUE si la variable ha estat inicialitzada|
|unset($var) | elimina la variable. No es pot utilitzar més |
|empty($var) | retorna TRUE si la variable no ha estat inicialitzada |
| is_int($var) |
|is_float($var)|
|is_numeric($var) | retorna TRUE si $var es un valor numèric o una cadena numèrica|
|is_bool($var)|
|is_array($var)|
| print_r($var)|
|var_dump($var)|
|----------------|------|

La funció `error_reporting(level:)` indica quin tipus d'error es mostra en la consola. Durant el temps de programació s'hauria de mostrar tots (E_ALL).


## Activitats

1. Escriu un script que calculi la potència `$base ** $exponent`. 
Comprova abans de realitzar el càlcul que les varaibles tinguin un valor i aquest sigui numèric, ja que
ens temem que l'usuari hagi pogut introduïr qualsevol cosa. Mostra un missatge d'error adequat per a cadascuna de les situacions que donguin error.

2. 

