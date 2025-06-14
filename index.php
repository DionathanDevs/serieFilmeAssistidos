<?php require_once 'verify.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes e Séries Assistidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sistema de Filmes e Séries</h1>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>

        <h2>Bem-vindo, <?= $_SESSION['user']; ?></h2>

        <?php 
        require_once 'functions.php';
        verifyExceptions();
        ?>

        <h3>Adicionar novo filme/série</h3>
        <form action="cadastroAssistidos.php" method="POST">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" placeholder="Digite o título" required>
            
            <label for="genero">Gênero:</label>
            <select name="genero" id="genero" required>
                <option value="">Selecione...</option>
                <option value="acao">Ação</option>
                <option value="comedia">Comédia</option>
                <option value="drama">Drama</option>
                <option value="terror">Terror</option>
                <option value="romance">Romance</option>
                <option value="ficcao">Ficção Científica</option>
                <option value="documentario">Documentário</option>
                <option value="outros">Outros</option>
            </select>

            <label for="description">Descrição:</label>
            <input type="text" name="description" id="description" placeholder="Digite uma descrição">

            <label for="rating">Nota (1-10):</label>
            <input type="number" name="rating" id="rating" min="1" max="10" required>

            <label for="tittleType">Tipo:</label>
            <select name="tittleType" id="tittleType" required>
                <option value="">Selecione...</option>
                <option value="serie">Série</option>
                <option value="filme">Filme</option>
            </select>

            <button type="submit">Cadastrar</button>
        </form>

        <h3>Meus Filmes e Séries</h3>
        <?php
        require_once 'conn.php';
        $conn = conn();
        $id = $_SESSION['id'];

        $sql = "SELECT id, title, genero, description, rating, tittleType 
                FROM tbwatches 
                WHERE id_user = ?";
        
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        
        $linhas = mysqli_num_rows($resultado);
        
        if($linhas <= 0){
            echo "<p>Nenhum filme ou série cadastrado ainda.</p>";
        } else {
            echo '<table>';
            echo '<tr>
                    <th>Título</th>
                    <th>Gênero</th>
                    <th>Descrição</th>
                    <th>Nota</th>
                    <th>Tipo</th>
                    <th>Ações</th>
                  </tr>';
            
            while($registro = mysqli_fetch_assoc($resultado)){
                echo '<tr>';
                echo '<td>'.$registro['title'].'</td>';
                echo '<td>'.$registro['genero'].'</td>';
                echo '<td>'.$registro['description'].'</td>';
                echo '<td>'.$registro['rating'].'</td>';
                echo '<td>'.$registro['tittleType'].'</td>';
                echo '<td><a href="deletar_assistido.php?id='.$registro['id'].'">[Excluir]</a></td>';
                echo '</tr>';
            }
            echo '</table>';
        }
        ?>
    </div>
</body>
</html>
