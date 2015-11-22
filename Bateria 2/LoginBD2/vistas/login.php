<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <form name="FormLogin" action="index.php" method="POST">
        <?php
            if($error){
                echo "<h2>Credenciales incorrectas, vuelve a intentarlo</h2>";
            }       
            echo "<label>Usuario: </label>";
            echo "<input type='text' name='user' />";
            echo "<label>Contraseña: </label>";
            echo "<input type='password' name='pass' />";
        ?>
            <input type="submit" name="botonlogin" value="Login" />
            <input type="submit" name="botonregistro" value="Registro" />
        </form>
    </body>
</html>