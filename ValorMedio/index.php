<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cálculo del valor medio</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>Cálculo del valor medio</h1>
        <div class="capaform">            
            <form name="FormNumeros" action="ProcesaValorMedio.php" method="POST">
                    <div class="form-section">
                        <label for="numero1"> Primer número: </Label> 
                        <input id="numero1" type="text"  required = "required" name="datos[numero1]" size="4" /> 
                    </div>
                    <div class="form-section">
                        <label for="numero2"> Segundo número: </Label> 
                        <input id="numero2" type="text"  required = "required" name="datos[numero2]" size="4"/> 
                    </div>
                    <div class="form-section">
                        <label for="numero3"> Tercer número: </Label> 
                        <input id="numero3" type="text"  required = "required" name="datos[numero3]" size="4"/> 
                    </div>
                    <input class="submit" type="submit" 
                           value="Enviar" name="botonenvio" /> 
                </form> 
            </div>
    </body>
</html>
