<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}
// Variables
$datos = $_POST['datos'];
$numero1 = $datos['numero1'];
$numero2 = $datos['numero2'];
$numero3 = $datos['numero3'];

if (isset($datos['alea'])) {
    $aleatorio = $datos['alea'];
} else {
    $aleatorio = rand((int)$numero1 , (int)$numero2);
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
        <?php
            // Proceso para calcular la solución
            if($numero3 == $aleatorio)
                {
        ?>
        <h1>Has ganado</h1>
        <?php
                }
            else
                {
        ?>
        <h1>Vuelve a intentarlo</h1> 
        <?php
                    if($numero3 > $aleatorio)
                    {
        ?>
                        <h1>Tu apuesta es MAYOR</h1>
        <?php
                    }
                    else
                    {
        ?>
                        <h1>Tu apuesta es MENOR</h1>
        <?php
                    }
        ?>
                    <form name="FormIntento" action="ProcesaForm.php" method="POST">
                        <label>Inténtalo de nuevo</label>
                        <input type="number" name="datos[numero3]">
                        <input type="hidden" name="datos[numero1]" value="<?php echo $numero1 ?>">
                        <input type="hidden" name="datos[numero2]" value="<?php echo $numero2 ?>">
                        <input type="hidden" name="datos[alea]" value="<?php echo $aleatorio ?>">
                        <input class="submit" type="submit" name="botonenvio">
                    </form>
        <?php
                }
        ?>
        <h1>
            Tu apuesta: <em class='data'><?php echo $numero3 ?></em>
            Aleatorio: <em class='data'>
                <?php 
                echo "$aleatorio"; 
                ?></em>
        </h1>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>