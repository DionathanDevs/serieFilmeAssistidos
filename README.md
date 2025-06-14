Sistema de Filmes/Séries Assistidos (PHP + MySQL)
📋 Descrição do Projeto
Sistema completo para registro de filmes e séries assistidos desenvolvido com:

PHP puro (sem frameworks)

MySQL (via XAMPP)

HTML/CSS básico

🛠 Tecnologias Utilizadas
Front-end: HTML5, CSS3

Back-end: PHP 8+

Banco de dados: MySQL (via XAMPP)

Servidor: Apache (XAMPP)

📂 Estrutura de Arquivos
text
/
├── /database/
│   └── tbwatches.sql       # Script SQL do banco
├── conn.php                # Conexão com MySQL
├── functions.php           # Funções auxiliares
├── verify.php              # Controle de sessão
├── cadastro.php            # Página de cadastro
├── cadastroback.php        # Processa cadastro
├── login.php               # Processa login
├── loginweb.php            # Página de login
├── index.php               # Página principal
├── deletar_assistido.php   # Remove registros
├── logout.php              # Encerra sessão
└── style.css               # Estilos CSS
🚀 Instalação Passo a Passo
1. Configurar XAMPP
Instale o XAMPP (https://www.apachefriends.org)

Inicie os módulos Apache e MySQL

2. Criar o Banco de Dados
Acesse phpMyAdmin (http://localhost/phpmyadmin)

Crie um banco chamado systemwatch

Importe o arquivo tbwatches.sql:

sql
CREATE TABLE `tbwatches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `description` varchar(400) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `tittleType` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
3. Configurar Conexão
Edite conn.php com seus dados:

php
<?php
function conn() {
    $server = 'localhost';
    $user = 'root';          // Usuário padrão XAMPP
    $password = '';          // Senha padrão XAMPP (vazia)
    $bank = 'systemwatch';   // Nome do banco
    
    $conn = mysqli_connect($server, $user, $password, $bank);
    
    if(!$conn) {
        exit("Erro ao conectar: " . mysqli_connect_error());
    }
    
    return $conn;
}
?>
4. Testar o Sistema
Coloque os arquivos na pasta htdocs do XAMPP

Acesse: http://localhost/seu_projeto/loginweb.php