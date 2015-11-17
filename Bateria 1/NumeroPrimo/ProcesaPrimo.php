<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}

// Variables
$numero = $_POST['numero'];

function primo($num)
{
    $cont=0;
    // Funcion que recorre todos los numero desde el 2 hasta el valor recibido
    for($i=2;$i<=$num;$i++)
    {
        if($num%$i==0)
        {
            # Si se puede dividir por algun numero mas de una vez, no es primo
            if(++$cont>1)
                return false;
        }
    }
    return true;
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
        if(!is_numeric($numero)){
            echo "<h1>Introduce un número</h1>";
        } else{  
        ?>
        <h1>            
            El número <?php echo "$numero" ?><em class='data'>
            <?php 
                $primo = primo($numero);
                if($primo == true){
                    echo " es PRIMO";                    
                } else{
                    echo " NO es PRIMO";
                }
            ?>
            </em>
        </h1> 
        <?php } ?>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>