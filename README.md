# Séries e Filmes assistidos


---

# 🎬 Sistema de Filmes/Séries Assistidos (PHP + MySQL)

## 📋 Descrição
Sistema completo para registro de filmes e séries assistidos, com:
- Autenticação de usuários
- CRUD de títulos
- Validações server-side

---

## 🚀 Instalação
1. **Requisitos**:
   - XAMPP ([download](https://www.apachefriends.org))
   - PHP 8+
   - MySQL

2. **Configuração**:
   Extraia o projeto na pasta `htdocs` do seu XAMPP. Por exemplo:
   `C:\xampp\htdocs\sistema-filmes\`

   **Banco de Dados**:
   Execute o script SQL abaixo no phpMyAdmin ou importe o arquivo `.sql` exportado do repositório no seu phpMyAdmin:

   ```sql
   CREATE TABLE `tbwatches` (
     `id` int(11) NOT NULL AUTO_INCREMENT,
     `title` varchar(70) NOT NULL,
     `genero` varchar(50) NOT NULL,
     `description` varchar(400) DEFAULT NULL,
     `rating` int(11) NOT NULL,
     `tittleType` varchar(50) NOT NULL,
     `id_user` int(11) NOT NULL,
     PRIMARY KEY (`id`)
   );
3. **Ajuste o arquivo conn.php para os seus dados**:
```bash 
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
```
?>