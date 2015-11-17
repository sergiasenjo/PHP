<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Factorial</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>Calculo del Factorial</h1>
        <div class="capaform">            
            <form name="FormNumeros" action="ProcesaFactorial.php" method="POST">
                    <div class="form-section">
                        <label for="labelImporte"> Número: </Label> 
                        <input id="numero" type="number"  required = "required" name="numero" /> 
                    </div>
                    <input class="submit" type="submit" 
                           value="Calcular" name="botonenvio" /> 
                </form> 
            </div>
    </body>
</html>
