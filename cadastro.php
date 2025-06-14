<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php 
        require_once 'functions.php';
        
        verifyExceptions();
        
        ?>
        <div class="card">
            <h2>Criar Conta</h2>
            <form action="cadastroback.php" method="POST">
                <div class="form-group">
                    <label for="user">Usuário</label>
                    <input type="text" id="user" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="repeatpassword">Repetir Senha</label>
                    <input type="password" id="repeatpassword" name="repeatpassword" class="form-control" required>
                </div>
                <button type="submit" class="btn">Cadastrar</button>
                <a href="loginweb.php">Ja possui login?</a>
            </form>
        </div>
    </div>
</body>
</html>