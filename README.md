# 🍕 Sistema de Pedidos - Pizzaria João

Projeto desenvolvido em PHP com MySQL, simulando um sistema simples de pedidos de pizza com painel administrativo.

---

## 📁 Estrutura do Projeto

- `index.php` – Página inicial do sistema
- `dashboard.php` – Painel administrativo
- `orders.php` – Gerenciamento de pedidos
- `pizza.php` – Cadastro de pizzas
- `templates/header.php` e `footer.php` – Layout reutilizável
- `styles.css` – Estilos da aplicação
- `conn.php` – Conexão com o banco de dados (IGNORADO no repositório)
- `conn.example.php` – Modelo de conexão para configurar localmente

---

## 🔧 Como configurar a conexão com o banco

1. Copie o arquivo de exemplo:

   cp conn.example.php conn.php
Edite o conn.php com seus dados reais:

$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_banco";

⚙️ Requisitos
PHP 7.4 ou superior

MySQL

Servidor local como XAMPP, WAMP ou Laragon

🚀 Como rodar localmente
Clone este repositório:


git clone https://github.com/FelipeLuiz93/pizzariajoao.git
Copie o conn.example.php para conn.php e configure os dados do banco.

Coloque o projeto em htdocs (caso use XAMPP).

Acesse no navegador:


http://localhost/pizzariajoao
