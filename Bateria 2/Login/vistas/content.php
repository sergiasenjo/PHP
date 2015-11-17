<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contenido</title>
    </head>
    <body>
        <?php
            echo "<h1>Bienvenido $user</h1>";
        ?>
        <br>
        <form name="FormLogout" action="index.php" method="POST">
            <input type="submit" name="botonlogout" value="Logout" />            
        </form>
    </body>
</html>