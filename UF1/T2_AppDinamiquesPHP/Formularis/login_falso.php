<?php

$user = $_POST['usuari'];
$pwd =  $_POST['clau'];

//enlloc de admin, utilitzeu el vostre nom
if ($user == 'admin' and $pwd == '1234'){
    header("Location:bienvenido.php?nom=jordi");
} else {
    header("Location:error.html");
}

//TODO

//Passa com a paràmetre el nom de l'usuari a la pàgina de bienvenido.php

//En uns 15-20 min, voldria veure el vostre escriptori i la pagina web funcionant