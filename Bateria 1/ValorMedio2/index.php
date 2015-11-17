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
                        <label for="numeros"> Números(Separados por ","): </Label> 
                        <input id="numero1" type="text"  required = "required" name="numeros" size="4" /> 
                    </div>
                    <input class="submit" type="submit" 
                           value="Enviar" name="botonenvio" /> 
                </form> 
            </div>
    </body>
</html>
