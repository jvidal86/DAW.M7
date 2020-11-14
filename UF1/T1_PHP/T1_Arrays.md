# Arrays

Els arryas en php son tractats com un tipus de dades, i a més, son arrays de tipus **associatiu**, es a dir, cada entrada de l'array es una parella `<Key, Value>`. Tot i ser associatius, els arrays també es poden utilitzar com arrays indexats (com en Java o C), i l'índex comença en 0.

## Arrays Indexats

```php {.line-numbers}
// Dues maneres de declarar arrays indexats

$fruites = array('poma','maduixa','pera','prèssec','taronja','figa');
$estacions = ['hivern','primavera','estiu','tardor'];

// Accedir a un valor per mitjà de l'índex (0-based)
echo $fruites[0]; echo "\n";
echo $estacions[1]; echo "\n";

$i = 4;
echo $fruites[$i-1]
```
Produeix la sortida

```txt
poma
prèssec
```

## Arrays associatius
La parella clau valor s'indica amb el símbol `=>`. La clau es una cadena de tex. Mentres que el valor pot ser qualsevols tipus suportat per PHP i no té per què ser homogèni (tots els valors del mateix tipus).

```php
// Inicialitzar un array associatiu
$saldo = ['jaume' => 100, 'marta'=> 53, 'laia' => -10];

$nom = 'marta';
echo "El saldo de $marta es: ".$saldo['marta'];
```
El resultat és:

```txt
$saldo = ['jaume' => 100, 'marta'=> 53, 'laia' => -10];

foreach ( $nom in $saldo ){
  echo $nom . 'té un saldo de: ' . 
````
Per a processar tot l'array es for fer amb un bucle `foreach``

```php

```
## Funcions sobre arrays

 ### Treballar amb les claus o els valors
 ```php
array_keys();
array_values();
array_key_exists();
```