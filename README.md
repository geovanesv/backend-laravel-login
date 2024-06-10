

# Backend Laravel para Sistema de Login

Este é o backend feito com Laravel para uma aplicação de login. Este backend fornece rotas para registro de usuários, login, recuperação de senha, logout e algumas rotas protegidas que requerem autenticação.

## Configuração do Ambiente

Certifique-se de ter o ambiente Laravel configurado corretamente. Você precisará do Composer instalado para gerenciar as dependências do projeto.

1. Clone este repositório para sua máquina local:

    ```bash
    git clone https://github.com/geovanesv/backend-laravel-login.git
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd backend-laravel-login
    ```

3. Instale as dependências do Composer:

    ```bash
    composer install
    ```

4. Crie um arquivo `.env` a partir do arquivo `.env.example` e configure suas variáveis de ambiente, como a conexão com o banco de dados:

    ```bash
    cp .env.example .env
    ```

5. Gere a chave de aplicativo Laravel:

    ```bash
    php artisan key:generate
    ```

6. Execute as migrações do banco de dados para criar as tabelas necessárias:

    ```bash
    php artisan migrate
    ```

7. Inicie o servidor de desenvolvimento:

    ```bash
    php artisan serve
    ```

## Rotas

Este backend fornece as seguintes rotas:

- `POST /api/registration`: Rota para registrar novos usuários.
- `POST /api/login`: Rota para autenticar usuários e gerar tokens de acesso.
- `POST /api/password/email`: Rota para solicitar um e-mail de redefinição de senha.
- `POST /api/logout`: Rota para fazer logout do usuário autenticado.
- `POST /api/password/reset`: Rota para redefinir a senha do usuário.
- `GET /api/password/email-find/{token}`: Rota para encontrar um e-mail a partir do token de redefinição de senha.
- `POST /api/password/reset-confirm`: Rota para confirmar a redefinição de senha.
- `GET /api/hello`: Rota protegida que retorna uma saudação para o usuário autenticado.
- `GET /api/user`: Rota protegida que retorna os detalhes do usuário autenticado.

As rotas protegidas exigem um token de acesso válido, que deve ser passado no cabeçalho `Authorization` da solicitação.

## Como Usar

Pode-se fazer solicitações para essas rotas usando uma ferramentas como o Postman, Insomnia ou Axios em uma aplicação front-end.


## Autor

- Geovane Araujo




