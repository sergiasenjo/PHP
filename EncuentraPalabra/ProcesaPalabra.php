<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}

// Funciones
function ChequeoVocales($palabraChequeo){
    $vocales = ["a","e","i","o","u","A","E","I","O","U"];
    $palabraConsonantes = str_replace($vocales, "", $palabraChequeo);
    $numeroVocales = strlen($palabraChequeo) - strlen($palabraConsonantes);
    return $numeroVocales;
}

function ChequeoEro($palabraChequeo){
    $posicion = strpos($palabraChequeo, "ero");
                if ($posicion != strlen($palabraChequeo) - 3){
                    $ero = false; 
                } else{
                    $ero = true;
                }
    return $ero;
}

function Ordenacion($aPalabras){
    
    foreach($aPalabras as $valor){
        $numeroLetras[] = strlen($valor);
    }
    
    array_multisort($numeroLetras, SORT_DESC, $aPalabras, SORT_ASC);
    
    return $aPalabras;
}
// USO DE USORT
//function cmd($a , $b){
//    if(strlen($a) > strlen($b) || (strlen($a) === strlen($b)) && ($a >= $b)){
//        return(1);
//    } else{
//        return(-1);
//    }
//}
//
//$palabras = ["Panadero","Fontanero","Caladero"];
//
//usort($palabras, "cmp");
//
//foreach($palabras as $clave => $valor) {
//    echo "$clave: $valor\n";
//}

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
// Variables
$texto = $_POST['texto'];

$palabra = strtok($texto, "\n\t .,;:");

while ($palabra !== false){
    if (strtoupper($palabra[0]) === $palabra[0]){
        if (strlen($palabra) >= 8 && strlen($palabra) <= 10){
            $numeroVocales = ChequeoVocales($palabra);
            if ($numeroVocales == 4){
                $ero = ChequeoEro($palabra);
                if ($ero !== false){
                    $palabras[] = strtoupper($palabra);                    
                }
            }
        }
    }
    $palabra = strtok("\n\t .,;:");
}
if(isset($palabras)){
    
    $palabrasOrdenadas = Ordenacion($palabras);
    echo "<h1>", implode('-', array_unique($palabrasOrdenadas)), "</h1>";
    
    $palabrasRepetidas = array_count_values($palabrasOrdenadas);
    foreach ($palabrasRepetidas as $key => $valor){
        echo "<h1>Apariciones de la palabra $key: $valor</h1>";
    }
    
} else{
    echo "<h1>No hay coincidencias</h1>";
}
?>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>