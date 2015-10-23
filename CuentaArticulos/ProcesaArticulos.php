<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}

// Funciones
function CuentaArticulos($texto){
    $palabra = strtok($texto, "\n\t .,;:");
    $totalArticulos = 0;

    while ($palabra !== false){
        $palabraMayusculas = strtoupper($palabra);
        if($palabraMayusculas == strtoupper("el") ||
           $palabraMayusculas == strtoupper("la") ||
           $palabraMayusculas == strtoupper("los") ||
           $palabraMayusculas == strtoupper("las"))
        {
            $totalArticulos = $totalArticulos + 1;
        }
        
        $palabra = strtok("\n\t .,;:");
    }
    
    return $totalArticulos;
}

// Variables
$texto = $_POST['texto'];

$numeroDeArticulos = CuentaArticulos($texto);

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
            Número de artículos:
            <em class='data'>
            <?php 
                echo $numeroDeArticulos;
            ?>
            </em>
        </h1> 
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>