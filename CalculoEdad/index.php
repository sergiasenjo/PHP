<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cálculo edad</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>Cálculo edad</h1>
        <div class="capaform">            
            <form name="FormNumeros" action="ProcesaFecha.php" method="POST">
                    <div class="form-section">
                        <label for="fecha"> Fecha de nacimiento: </Label> 
                        <input id="fecha" type="text"  required = "required" name="fecha" size="10" /> 
                    </div>
                    <input class="submit" type="submit" 
                           value="Enviar" name="botonenvio" /> 
                </form> 
            </div>
    </body>
</html>