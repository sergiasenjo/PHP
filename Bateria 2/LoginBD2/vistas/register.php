<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
    </head>
    <body>
        <?php
        if($error){
            echo "<h2>El nombre de usuario que intentas utilizar está ocupado</h2>";
        }
        ?>
        <h1>Formulario de registro</h1>
        <form name="FormRegistro" action="../index.php" method="POST">
            <label>Nombre de usuario: </label>            
            <input type='text' name='user' />
            <br>
            <label>Contraseña: </label>            
            <input type='text' name='pass' />
            <br>
            <label>Email: </label>            
            <input type='text' name='email' />
            <br>
            <label>Pintor favorito: </label>            
            <select name="pintor">
                <option value="Picaso">Picaso</option>
                <option value="Dalí">Dalí</option>
                <option value="Escher">Escher</option>
                <option value="Monet">Monet</option>
            </select>
            <br>
            <input type="submit" name="envioregistro" value="Enviar" />            
        </form>
    </body>
</html>