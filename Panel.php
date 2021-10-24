<?php session_start(); 
    if( !isset($_SESSION['Login']) ) {
        header('Location: index.php?NotPermission');
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control panel</title>
</head>
<body>
    <a href="loggout.php">Loggout</a>
    <form action="correo.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="dni" placeholder="DNI">
        <input type="text" name="asunto" placeholder="Asunto">
        <input type="email" name="email" placeholder="Email">
        <textarea name="mensaje" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>