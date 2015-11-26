<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Año bisiesto</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>Año bisiesto prueba</h1>
        <div class="capaform">            
            <form name="FormNumeros" action="ProcesaBisiesto.php" method="POST">
                    <div class="form-section">
                        <label for="anio"> Año: </Label> 
                        <input id="numero1" type="text"  required = "required" name="anio" size="4" /> 
                    </div>
                    <input class="submit" type="submit" 
                           value="Enviar" name="botonenvio" /> 
                </form> 
            </div>
    </body>
</html>