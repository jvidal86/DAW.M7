# Introducció a PHP

PHP (* *) és un llenguatge script per a entorn web servidor. Està especialment dissenyat per a ser integrat i treballar conjuntament amb arxius HTML i posa també especial èmfasis en la integració amb bases de dades i manipulació d'arxius XML.

## php en HTML

Dins d'un .html el codi php s'interpreta entre les marques especials `<?php` i `?>`.
Pot haver-hi múltiples elements php: abans de la etiqueta `<html>`, dins d'elements,...

## Literals i Cadenes de caràcter

En php els valors numèrics s'expressen com a:
* enters amb signe
* decimals (.)
* cientific -3.34e-12
* boolea true o false
* null
* cadena de caràcters 'cadena' (cometa vertical)

## Separador de sentències i blocs

PHP utilitza separador d'instruccions "**;**". D'aqui que la última instrucció no necessita ";" final, ja que no és terminació de sentència

Els blocs de codi son equivalents a C. S'utilitza el símbol "{ }"

## Variables
PHP es un llenguatge no tipat, per tant en declarar variable no s'ha d'indicar el tipus.
Les variables començen pel sí,bol `$`, segui d'un caràcter [a-zA-Z] p bé un guió baix `_`.

Les variables poden ser opcionalment inicialitzades en el moment de la declaració:

```php
<?php
  $name = 'Jaume Sales';
  $edat = 43;
  $PI = 3.1415;
  $Av = 2.34e24;
  $resultat = true
?>
```
## Mostrar Dades

Hi ha dues maneres comuns de mostrar el resultat:
* la isntrucció `echo` no necessita de parèntesis. És molt comú en PHP
* print() és una funció

```php
<?php
//Inicialitzar una variable amb un literal enter
$enter = 34509;

echo $enter;
print($enter);
?>
```
