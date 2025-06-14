# 🎬 Sistema de Filmes/Séries Assistidos (PHP + MySQL)

## 📋 Descrição
Sistema completo para registro de filmes e séries assistidos, com:
- Autenticação de usuários
- CRUD de títulos
- Validações server-side

## 🚀 Instalação
1. **Requisitos**:
   - XAMPP ([download](https://www.apachefriends.org))
   - PHP 8+
   - MySQL/MariaDB

2. **Configuração**:
   ```bash
   # Extraia na pasta htdocs
   C:\xampp\htdocs\sistema-filmes\
Banco de Dados (execute no phpMyAdmin):

``sql``
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
📂 Estrutura de Arquivos
``text``
sistema-filmes/
├── conn.php                 # Conexão MySQL
├── functions.php            # Funções compartilhadas
├── verify.php               # Controle de sessão
├── cadastro.php             # View de cadastro
├── cadastroback.php         # Controller de cadastro
├── login.php                # Autenticação
├── loginweb.php             # Página de login
├── index.php                # Dashboard principal
├── deletar_assistido.php    # Exclusão de registros
├── logout.php               # Encerrar sessão
└── style.css                # Estilos CSS
⚙️ Configuração
Edite conn.php com seus dados:

``php``
<?php
function conn() {
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $bank = 'systemwatch';
    
    $conn = mysqli_connect($server, $user, $password, $bank);
    
    if(!$conn) {
        exit("Erro ao conectar: " . mysqli_connect_error());
    }
    
    return $conn;
}
?>
🔒 Códigos de Erro
Código	Mensagem
0	Requisição inválida
1	Senhas não coincidem
4	Campos obrigatórios
6	Sucesso na operação
7	Credenciais inválidas
💡 Como Usar
Acesse:

``text``
http://localhost/sistema-filmes/loginweb.php
Cadastre-se e faça login

Adicione filmes/séries no dashboard