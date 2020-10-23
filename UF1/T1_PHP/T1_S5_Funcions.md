# Definir Funcions

## Procediments i Funcions

Com que PHP es un llenguatge no tipat no cal declarar el tipus de retorn d'una funció, i per tant funcions i procediment es declaren igual.

Exemple de funció suma de dos valors:

```php
<?php
function suma($a, $b){
    return $a + $b;
}
echo suma(10,5);

$num1 = 20;
$num2 = 12.5;
$res = suma($num1, $num2);
echo "Resultat: $res".'<br/>'
?>
```

Es poden especificar valors per defecte als paràmetres.

```php



```

## Pas de Paràmetres per Referència

Per defecte, com en C, el pas de paràmetres dels tipus elmentals es per còpia

```php
$a = 10;

fucntion incr($var) {

}


```

## Funcions com Arguments
