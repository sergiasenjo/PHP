<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modifica Perfil</title>
    </head>
    <body>
        <?php
            echo "<h1>Perfil de " . $userObj->getUser() . "</h1>";
        ?>
        <br>
        <form name="FormLogout" action="index.php" method="POST">
            <input type="submit" name="botonlogout" value="Logout" />            
        </form>
    </body>
</html>