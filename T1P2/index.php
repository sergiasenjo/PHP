<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Adivina el número</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>Adivina el número</h1>
        <div class="capaform">            
            <form name="FormNumeros" action="ProcesaForm.php" method="POST">
                    <div class="form-section">
                        <label for="numero1"> Primer número: </Label> 
                        <input id="numero1" type="number"  required = "required" name="datos[numero1]" size="4" /> 
                    </div>
                    <div class="form-section">
                        <label for="numero2"> Segundo número: </Label> 
                        <input id="numero2" type="number"  required = "required" name="datos[numero2]" size="4"/> 
                    </div>
                    <div class="form-section">
                        <label for="numero3"> Adivina el número: </Label> 
                        <input id="numero3" type="number"  required = "required" name="datos[numero3]" size="4"/> 
                    </div>
                    <input class="submit" type="submit" 
                           value="Enviar" name="botonenvio" /> 
                </form> 
            </div>
    </body>
</html>
