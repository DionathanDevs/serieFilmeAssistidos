<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php 
        require_once 'functions.php';
        
        verifyExceptions();
        
        ?>
        <div class="card">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="user">Usuário</label>
                    <input type="text" id="user" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn">Entrar</button>
                <a href="cadastro.php">Não possui cadastro?</a>
            </form>
        </div>
    </div>
</body>
</html>