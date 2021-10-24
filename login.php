<?php session_start();
if(isset($_SESSION['Login'])){
    header('Location: Panel.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Archivos/Css/Main.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("FormLogin").submit();
        }
    </script>
</head>
<body>
    <div class="LoginFormulario">
        <h2>Control panel</h2>
        <?php if(isset($_GET['error'])){
            echo(htmlspecialchars($_GET['error']));
        } ?>
        <form action="Controladores/validar-login.php" method="POST" id="FormLogin">
            <input type="text" placeholder="Username" name="username" class="Login__button" require value="<?php if(isset($_GET['user'])) {echo(htmlspecialchars($_GET['user']));} ?>">
            <input type="password" name="password" placeholder="Password" class="Login__button" require>
            <button class="g-recaptcha Login__button" 
                data-sitekey="6LcoAewcAAAAAEpuSXnju0vKjq2lBph0AZOAIDj0" 
                data-callback='onSubmit' 
                data-action='submit'>Submit
            </button>
        </form>
    </div>
</body>
</html>