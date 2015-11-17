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

if (($numero1 <= $numero2) && ($numero2 <= $numero3)){
    $valorMedio = $numero2;
} else{
    if (($numero2 <= $numero1) && ($numero1 <= $numero3)){
        $valorMedio = $numero1;
    } else{
        $valorMedio = $numero3;
    }
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
            Números: <em class='data'><?php echo "$numero1, $numero2 y $numero3" ?></em>
            Valor Medio: <em class='data'>
                <?php                 
                    echo "$valorMedio"; 
                ?></em>
        </h1>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>