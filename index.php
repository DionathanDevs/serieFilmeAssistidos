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
    <form action="cadastroAssistidos.php" method="POST">
        <input type="text" id="title" name="title"> </input>
        <select name="genero" id="genero">
            <option value="">Selecione</option>
            <option value="acao">Ação</option>
            <option value="comedia">Comédia</option>
            <option value="drama">Drama</option>
            <option value="terror">Terror</option>
            <option value="romance">Romance</option>
            <option value="ficcao">Ficção Científica</option>
            <option value="documentario">Documentário</option>
            <option value="outros">Outros</option>
        </select>
        <input type="text" id="description" name="description"> </input>
        <input type="text" id="rating" name="rating"><input>
        <select name="tittleType" id="text">
            <option value="">Selecione</option>
            <option value="serie">Série</option>
            <option value="filme">Filme</option>
        </select>
    <button type="submit">Enviar</button>
    </form>

    <section>
        
    </section>
</body>
</html>