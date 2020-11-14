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

## Funcions sobre arrays
