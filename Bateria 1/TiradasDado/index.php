<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tiradas Dado</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>Tiradas de un dado</h1>
        <div class="capaform">            
            <form name="FormTiradasDado" action="ProcesaTiradasDado.php" method="POST">
                    <div class="form-section">
                        <label for="tiradas"> Número de tiradas: </Label> 
                        <input id="tiradas" type="text"  required = "required" name="tiradas" size="4" /> 
                    </div>
                    <input class="submit" type="submit" 
                           value="Enviar" name="botonenvio" /> 
                </form> 
            </div>
    </body>
</html>