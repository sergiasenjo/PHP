<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cuenta artículos</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>Cuenta artículos</h1>
        <div class="capaform">            
            <form name="FormTexto" action="ProcesaArticulos.php" method="POST">
                    <div class="form-section">
                        <label for="texto"> Texto: </Label> 
                        <textarea cols="50" rows="5" id="numero1" type="text" 
                                  required = "required" name="texto" size="1"></textarea> 
                    </div>                    
                    <input class="submit" type="submit" 
                           value="Mostrar" name="botonenvio" /> 
                </form> 
            </div>
    </body>
</html>