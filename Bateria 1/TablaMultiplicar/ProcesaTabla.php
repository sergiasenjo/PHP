<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}

// Variables
$datos = $_POST['datos'];
$numero = $datos['numero'];
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
        <?php            
            // Comprobación de si es un dato numérico
            if(!is_numeric($numero)){
                $error = "<h1> El valor de " . "'$numero'" . " no está en el formato correcto</h1>";
            }
            // Comprobación de si está en el rango
            else if (($numero < 1) || ($numero > 9)){
                $error = "<h1> El valor de " . "'$numero'" . " no está en el rango correcto (1-9)</h1>";
            }
            // Si hay error hay que decirle que cargue el formulario de nuevo
            if(isset($error)){
                echo $error;
                include('index.php'); 
            }
            else{
        ?>
        <h1>Tabla del <?php echo $numero ?></h1>
        <div class="info">
            <table>
                <?php
                    $i=0;
                    while($i<=9){
                        $i++;
                ?>
                <tr>
                    <td>
                        <?php echo $numero ?> x <?php echo $i ?>
                    </td>
                    <td>=</td>
                    <td>
                        <?php echo $numero*$i ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
        <?php
            }
        ?>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>

