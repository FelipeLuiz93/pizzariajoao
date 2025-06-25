# pizzariajoao
Projeto PHP com integração ao Banco de dados (MySQL)

# Sistema de Pedidos de Pizza em PHP 🍕

Este é um projeto simples desenvolvido em PHP puro, com integração a banco de dados MySQL. Ele permite gerenciar pedidos de pizza através de uma interface web.

## 📁 Estrutura do Projeto

- `index.php` – Página inicial
- `dashboard.php` – Painel administrativo
- `orders.php` – Gerenciamento de pedidos
- `pizza.php` – Cadastro/edição de pizzas
- `styles.css` – Estilos da aplicação
- `header.php`, `footer.php` – Layout reutilizável
- `conn.php` – Conexão com o banco de dados (não incluído)

## 🔐 Configuração da Conexão com o Banco de Dados

1. Copie o arquivo `conn.example.php` e renomeie para `conn.php`:

   ```bash
   cp conn.example.php conn.php
Edite conn.php com os dados reais do seu banco de dados:

Host

Usuário

Senha

Nome do banco

⚙️ Requisitos
PHP 7.4 ou superior

Servidor local (XAMPP, WAMP, Laragon ou similar)

MySQL

🚀 Como rodar o projeto localmente
Clone este repositório:

bash
Copiar
Editar
git clone https://github.com/seu-usuario/nome-do-repositorio.git
Copie e configure o conn.php como descrito acima.

Coloque o projeto na pasta do seu servidor local (ex: htdocs no XAMPP)

Acesse http://localhost/nome-do-projeto no navegador.
