<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}

// Variables
$numero = $_POST['numero'];
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
        
            // Secuencia de números que pueden contener comas y guiones
            $secPaginasOriginal = $_POST['numero'];
            
            // Números que sólo contienen comas
            $secPaginas;
            
            // Array con los componentes separados por comas
            $item = explode("," , $secPaginasOriginal);
            
            for($i=0; $i < count($item); $i++){
                // Si se trata de un rango obtenemos el límite inferior y superior
                if(strpos($item[$i] , "-")){
                    $rango = explode("-" , $item[$i]);
                    $rangocompleto = range($rango[0] , $rango[1]);
                    $item[$i] = implode("," , $rangocompleto);
                    $item2 = explode(",", $item[$i]);
                    unset($item[$i]);
                }
            }
            
            $itemCombinado = array_merge($item,$item2);
            
            $itemSinRepetir = array_unique($itemCombinado);
            
            $secPaginas = implode("," , $itemSinRepetir);
            // Para separar por comas
            $pagina = strtok($secPaginas , ",");
        
            while ($pagina !== false){
                echo "<div class=\"info\">";
                echo "<h3>Tabla del " , $pagina , "</h3>";
                echo "<table border=0>";
                for($n = 1; $n <= 10; $n++){
                    echo "<tr>";
                    echo "<td>", $pagina , " x " , $n , "</td>";
                    echo "<td>=</td>";
                    echo "<td>", $pagina * $n ,"</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
                
                // Accedo al siguiente elemento de la secuencia
                $pagina = strtok(",");
            }
            
        ?>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>