# Portfólio Dinâmico com PHP

Este é um projeto de um portfólio web dinâmico, desenvolvido para gerenciar e exibir projetos de forma profissional e interativa.


## ✨ Funcionalidades

* Cadastro de novos projetos com nome, data, descrição e imagem de capa.
* Galeria de projetos dinâmica que carrega os dados do banco de dados.
* Visualização detalhada de cada projeto em uma janela modal.
* Design moderno e responsivo, adaptável a qualquer dispositivo.

## 🚀 Tecnologias Utilizadas

* **Back-end:** PHP
* **Banco de Dados:** MySQL
* **Front-end:** HTML5, CSS3, JavaScript
* **Framework CSS:** Bootstrap 5

## ⚙️ Como Executar Localmente

Siga os passos abaixo para configurar e rodar o projeto em seu ambiente local.

**Pré-requisitos:**
* Um servidor web local (XAMPP, WAMP, etc.)
* PHP e MySQL

**Instalação:**

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/seu-usuario/portfolio-php.git
    ```

2.  **Configure o banco de dados:**
    * Crie um banco de dados chamado `portfolio_db`.
    * Importe o arquivo `database.sql` para criar a tabela `projects`.

3.  **Configure a conexão:**
    * Renomeie o arquivo `db_connect.example.php` para `db_connect.php`.
    * Abra `db_connect.php` e insira suas credenciais do banco de dados.

4.  **Inicie o servidor e acesse `http://localhost/portfolio-php` no seu navegador.**

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
