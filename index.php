<?php require_once 'verify.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes e Séries assistidos</title>
</head>
<body>
    <h1>chegou na index</h1>
    <?php echo 'Olá, ' . $_SESSION['user'];
    
    require_once 'functions.php';

    verifyExceptions();

    ?>

</body>
</html>