<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla de multiplicar</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>Tabla de Multiplicar</h1>
        <div class="capaform">            
            <form name="FormNumero" action="ProcesaTabla.php" method="POST">
                    <div class="form-section">
                        <label for="numero"> Elige un número (1-9): </Label> 
                        <input id="numero1" type="text"  required = "required" name="datos[numero]" size="1" /> 
                    </div>                    
                    <input class="submit" type="submit" 
                           value="Mostrar" name="botonenvio" /> 
                </form> 
            </div>
    </body>
</html>
