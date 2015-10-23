<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conversor de divisas</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>Conversor de divisas</h1>
        <div class="capaform">            
            <form name="FormNumeros" action="ProcesaDivisas.php" method="POST">
                    <div class="form-section">
                        <label for="labelImporte"> Importe: </Label> 
                        <input id="importe" type="number"  required = "required" name="divisas[importe]" /> 
                    </div>
                    <div class="form-section">
                        <label for="divisa1"> Divisa 1: </Label> 
                         <select name="divisas[uno]">
                            <option value="EUR" selected="selected">Euro</option>
                            <option value="USD">Dólar</option>
                            <option value="GBP">Libra Esterlina</option>
                            <option value="CNY">Yuan</option>
                          </select>  
                    </div>
                    <div class="form-section">
                        <label for="divisa2"> Divisa 2: </Label> 
                         <select name="divisas[dos]">
                            <option value="EUR">Euro</option>
                            <option value="USD" selected="selected">Dólar</option>
                            <option value="GBP">Libra Esterlina</option>
                            <option value="CNY">Yuan</option>
                          </select>  
                    </div>
                    <input class="submit" type="submit" 
                           value="Cambio" name="botonenvio" /> 
                </form> 
            </div>
    </body>
</html>
