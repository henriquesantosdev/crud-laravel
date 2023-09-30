# CRUD Laravel

Este é um aplicativo CRUD simples desenvolvido usando o framework Laravel. Ele permite que você crie, leia, atualize e exclua registros em um banco de dados.

## Pré-requisitos

Antes de começar, certifique-se de ter atendido aos seguintes requisitos:

- PHP >= 7.3
- Composer (https://getcomposer.org/)
- Laravel (https://laravel.com/)
- Banco de dados (por exemplo, MySQL, PostgreSQL, SQLite)

## Instalação

Siga estas etapas para instalar e configurar o aplicativo:

1. Clone o repositório: `git clone https://github.com/seu-usuario/crud-laravel.git`

2. Navegue até o diretório do projeto.

3. Instale as dependências do Composer: `composer install`

4. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente, incluindo a conexão com o banco de dados.

5. Gere a chave de aplicativo: `php artisan key:generate`

6. Execute as migrações do banco de dados para criar as tabelas: `php artisan migrate`

7. Inicie o servidor de desenvolvimento: `php artisan serve`
O aplicativo estará disponível em http://localhost:8000.

## Uso

Acesse a interface do aplicativo no seu navegador para criar, visualizar, atualizar e excluir registros.

## Contribuição

Se você deseja contribuir para este projeto, siga estas etapas:

1. Fork o projeto.
2. Crie uma nova branch (`git checkout -b feature/nova-feature`).
3. Faça commit das suas alterações (`git commit -am 'Adicione uma nova feature'`).
4. Faça push para a branch (`git push origin feature/nova-feature`).
5. Crie um novo Pull Request.

## Documentação do Laravel

Para obter mais informações sobre o Laravel, consulte a [documentação oficial do Laravel](https://laravel.com/docs).
