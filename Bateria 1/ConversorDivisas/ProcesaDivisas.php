<?php
// Código para evitar que puedan acceder a ProcesaForm directamente
if (!isset($_POST['botonenvio'])) {
    header('Location: http://localhost:8000');
}
// Variables
$divisas = $_POST['divisas'];
$importe = $divisas['importe'];
$divisa1 = $divisas['uno'];
$divisa2 = $divisas['dos'];

$eurodolar = 1.12214;
$dolareuro = 1 / $eurodolar;
$eurolibra = 0.736589;
$libraeuro = 1 / $eurolibra;
$euroyuan = 7.16389;
$yuaneuro = 1 / $euroyuan;
$dolarlibra = 0.656232;
$libradolar = 1 / $dolarlibra;
$dolaryuan = 6.38278;
$yuandolar = 1 / $dolaryuan;
$librayuan = 9.72708;
$yuanlibra = 1 / $librayuan;

switch ($divisa1) {
    case "EUR":
        switch ($divisa2){
            case "EUR":
                $cambio = $importe;
                break;
            case "USD":
                $cambio = $importe * $eurodolar;
                break;
            case "GBP":
                $cambio = $importe * $eurolibra;
                break;
            case "CNY":
                $cambio = $importe * $euroyuan;
                break;
        }
        break;
    case "USD":
        switch ($divisa2){
            case "EUR":
                $cambio = $importe * $dolareuro;
                break;
            case "USD":
                $cambio = $importe;
                break;
            case "GBP":
                $cambio = $importe * $dolarlibra;
                break;
            case "CNY":
                $cambio = $importe * $dolaryuan;
                break;
        }
        break;
    case "GBP":
        switch ($divisa2){
            case "EUR":
                $cambio = $importe * $libraeuro;
                break;
            case "USD":
                $cambio = $importe * $libradolar;
                break;
            case "GBP":
                $cambio = $importe;
                break;
            case "CNY":
                $cambio = $importe * $librayuan;
                break;
        }
        break;
    case "CNY":
        switch ($divisa2){
            case "EUR":
                $cambio = $importe * $yuaneuro;
                break;
            case "USD":
                $cambio = $importe * $yuandolar;
                break;
            case "GBP":
                $cambio = $importe * $yuanlibra;
                break;
            case "CNY":
                $cambio = $importe;
                break;
        }
        break;
}

?>

<!DOCTYPE html>
<html>
    <head>   
        <title>Divisas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <style>
            .data {
                color: brown;
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>
            Cantidad en <?php echo $divisa1 ?>: <em class='data'><?php echo $importe ?></em>
            Cantidad en <?php echo $divisa2 ?>: <em class='data'><?php echo $cambio ?></em>
        </h1>
        <form name="FormVolver" action="http://localhost:8000" method="POST">
            <input class="submit" type="submit" value="Volver" name="botonvolver">
        </form>
    </body>
</html>