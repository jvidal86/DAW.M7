<?php



$user = $_POST['usuari'];
$pwd =  $_POST['clau'];

if ($user == 'admin' and $pwd == '1234'){
    header("Location:bienvenido.html");
} else {
    header("Location:error.html");
}

