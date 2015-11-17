<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Número Primo</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>Número Primo</h1>
        <div class="capaform">            
            <form name="FormPrimo" action="ProcesaPrimo.php" method="POST">
                    <div class="form-section">
                        <label for="numero"> Número: </Label> 
                        <input id="numero" type="text"  required = "required" name="numero" size="4" /> 
                    </div>
                    <input class="submit" type="submit" 
                           value="Enviar" name="botonenvio" /> 
                </form> 
            </div>
    </body>
</html>
