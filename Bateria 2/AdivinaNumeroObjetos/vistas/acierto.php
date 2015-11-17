<h1>Enhorabuena has acertado</h1>
<h1>Número: <?php echo $_POST["numero"]; ?></h1>
<h1>Intentos: <?php echo $_SESSION["partida"]->getIntentos(); ?> intentos</h1>
<form action="index.php" method="POST">
    <input type="submit" name="botonvolver" value="Volver"/>
</form>