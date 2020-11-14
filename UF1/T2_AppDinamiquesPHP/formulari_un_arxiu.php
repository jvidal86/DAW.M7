



<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['usuari'] == 'admin' and $_POST['clau'] == '1234'){
            header("Location: bienvenido.php");
        } else {
            $err = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulari Bàsic</title>
</head>
<body>
    <?php if(isset($err)){
        echo '<p> Revisa usuari i clau</p>';
    }

    ?>
    <form method="POST"
          action=  "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >

        <label for="usuari">Usuari</label>
        <input name="usuari" type="text" id="usuari"
                value="<?php if(isset($usuari)) echo $usuari; ?>"/> <br/>

        <label for = "clau">Clau</label>
        <input id ="clau" name="clau" type="password"/> <br/>

        <input type="submit" value="Enviar"/><br/>
    </form>

</body>
</html>
