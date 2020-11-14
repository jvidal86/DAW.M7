# Arrays

Els arryas en php son tractats com un tipus de dades, i a més, son arrays de tipus **associatiu**, es a dir, cada entrada de l'array es una parella `<Key, Value>`. Tot i ser associatius, els arrays també es poden utilitzar com arrays indexats (com en Java o C), i l'índex comença en 0.

## Arrays Indexats

```php
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

```


Per a processar tot l'array es for fer amb un bucle `foreach``

```php
$saldos = ['jaume' => 100, 'marta'=> 53, 'laia' => -10];

foreach( $saldos as $valor )
  echo "El valor es $valor\n";

foreach ( $saldo as $nom => $saldo) {
  echo $nom . 'té un saldo de: ' . $saldo . "€\n";
}
```
## Funcions sobre arrays

### Comprovar contingut

```php
$fruites = array('poma','maduixa','pera','prèssec','taronja','figa');
$found = in_array( 'figa', $fruites); 
var_dump($found);

if( $found )
  echo "found\n";
else
  echo "not found\n";

$i = array_search('pera', $fruites);
echo 'La fruita pera es troba a l\'índex '.$i;
```
El resultat es:

```txt
bool(true)
found
La fruita pera es troba a l'índex 2
```


### Treballar amb les claus o els valors

 ```php
//Keys
$mesos = ['gener', 'febrer', 'març', 'abril', 'maig', 'juny','juliol','agost','septembre','octubre','novembre','decembre'];
//values
$dies = [31,28,31,30,31,30,31,31,30,31,30,31];

//Construïr un array a partir de claus i valors
$calendari_mesos = array_combine($mesos, $dies);
print_r($calendari_mesos);

//Obtenir les claus d'un array
print_r(array_keys($calendari_mesos));

//Obtenir les claus (els mesos) per als valors = '30'
print_r(array_keys($calendari_mesos, '30'));

//Obtenir tots els valors
print_r(array_values($calendari_mesos));


$res = array_key_exists('agost', $calendari_mesos);
var_dump($res);
$res = array_key_exists('january', $calendari_mesos);
var_dump($res);

print_r(array_flip($calendari_mesos));

//Millor exemple de flip array
$correspondencia_1_1 = ['joan' => 'cap', 'maria' => 'CEO', 'pere' => 'adjunt'];
print_r($correspondencia_1_1);
print_r(array_flip($correspondencia_1_1))
```

La sortida és:
```txt
Array
(
    [gener] => 31
    [febrer] => 28
    [març] => 31
    [abril] => 30
    [maig] => 31
    [juny] => 30
    [juliol] => 31
    [agost] => 31
    [septembre] => 30
    [octubre] => 31
    [novembre] => 30
    [decembre] => 31
)
bool(true)
bool(false)
Array
(
    [31] => decembre
    [28] => febrer
    [30] => novembre
)
Array
(
    [joan] => cap
    [maria] => CEO
    [pere] => adjunt
)
Array
(
    [cap] => joan
    [CEO] => maria
    [adjunt] => pere
)
```

## Ordenació

PHP ofereix multiple maneres d'ordenar els arrays (associatius). Per defect la ordenació és ascendent.

* **a**, ordena conservant les claus
* **k**, ordena per claus
* **r**, ordenació inversa/descendent
* **u**, ordena amb una funció d'usuari

| |a|k|r|u|
-----------
a|asort()| | arsort() | uasort()|
-
k| |ksort()|krsort()| |
-
r|arsort()|krsort()|rsort()|  |
-
u| uasort()| | |usort()|
-


## Array Multi-dimensionals
