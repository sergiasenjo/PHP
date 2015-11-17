<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Adivina número</title>
    </head>
    <body>
         <?php
            if(!isset($_POST["botonenvio"])) {
                echo "<h1>Introduce un número del 1 al 10</h1>";
                include 'vistas/form.php';
            } else {
                if($_SESSION["partida"]->comprobarNumero($_POST["numero"])) {
                    include 'vistas/acierto.php';
                    session_unset();
                    session_destroy();                    
                } else {
                    echo "<h1>Has fallado Vuelve a Intentarlo</h1>";
                    if($_POST["numero"] > $_SESSION["partida"]->getRand()) {
                        echo "<h1>Número por encima</h1>";
                    } else {
                        echo "<h1>Número por debajo</h1>";
                    }
                    include 'vistas/form.php';
                }
            }
         ?>
    </body>
</html>