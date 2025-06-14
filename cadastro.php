<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php 
    require_once 'functions.php';
    verifyExceptions();
    ?>

    <form action="cadastroback.php" method="POST">

    <input name="user" id="user"></input>
    <input name="email" id="email"></input>
    <input name="password" id="password"></input>
    <input name="repeatpassword" id="repeatpassword"></input>

    <button type="submit">Enviar</button>
    </form>
</body>
</html>