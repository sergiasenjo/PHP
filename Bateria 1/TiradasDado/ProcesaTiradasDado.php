<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}

// Variables
$numeroTiradas = $_POST['tiradas'];

for($i = 1; $i <= $numeroTiradas; $i++){
    $tiradas[] = rand(1, 6); 
}

?>

<!DOCTYPE html>
<html>
    <head>   
        <title>Solución</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <style>
            .data {
                color: brown;
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>            
            <?php
            foreach($tiradas as $key => $tirada){
                $num = $key + 1;
                echo "Tirada $num: $tirada<br>";
            }
            echo "<br>";
            echo "Tiradas ordenadas:<br>";
            sort($tiradas, SORT_ASC);
            echo implode("-", $tiradas);
            
            ?>
        </h1> 
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>