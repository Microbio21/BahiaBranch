<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BahiaBranch</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="Archivos/Css/Main.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <meta name="description" content="BahiaBranch is a simple web to provide you a lot nav__informatión about critos, finance and it teaches you programing"/>
    <meta name="keywords" content="web design, web programing, programing, web development, seo, cryptocurrency, cripto, btc, eth, blog" />
    <link rel="icon" href="./bahiabranch.ico" type="image/x-icon">
</head>

<body>
    <?php include('templates/navbar.php'); 
    
        echo(password_hash('UserAdmin25', PASSWORD_ARGON2I));

    ?>

    <?php //verify if the admin is logged or not
    if(isset($_SESSION['Login'])): ?>
        <div class="AdminConnected">
            <div class="AdminConnected__container">
                <div class="admctd__btn">
                    ADM
                </div>
                <div class="admctd__item">
                    <a href="Panel.php">Panel</a>
                </div>
                <div class="admctd__item">
                    <a href="loggout.php">Loggout</a>
                </div>
            </div>
        </div>
    <?php endif ?>

    <!--Javascript-->
    <script src="Archivos/Js/app.js"></script>
    <!--Ionicons Framework-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>