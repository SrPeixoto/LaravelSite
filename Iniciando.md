<!-- Como iniciar -->
## Como iniciar

Para poder começar a usar esse exemplo, você terá que instalar o LARAVEL & COMPOSER.

### Pré-requisitos

  <a href="https://laravel.com"><strong>Site oficial do Laravel »</strong></a>
  <br />
  <a href="https://getcomposer.org"><strong>Site oficial do Composer »</strong></a>
  <br />
  <a href="https://www.docker.com/"><strong>Site oficial do Docker »</strong></a>

### Instalação

_O processo de instalação é comum, como qualquer outro projeto LARAVEL._

1. Verifique o guia oficial de <a href="#prerequisites">instalação do laravel</a> para obter os requisitos do servidor antes de começar. Documentação oficial

A instalação alternativa é possível sem dependências locais que dependam do <a href="#prerequisites">Docker</a>.

2. Clone o repositório
   ```sh
   git clone https://github.com/SrPeixoto/LaravelSite.git
   ```
3. Alternar para a pasta repositório
   ```sh
   cd LaravelSite
   ```
4. Instale todas as dependências usando o composer
   ```sh
   composer install
   ```
5. Copie o arquivo env de exemplo e faça as alterações de configuração necessárias no arquivo .env
   ```sh
   cp .env.example .env
   ```
6. Gerar uma nova chave de aplicativo
   ```sh
   php artisan key:generate
   ```
7. Gere uma nova chave secreta de autenticação JWT
   ```sh
   php artisan jwt:generate
   ```
8. Execute as migrações do banco de dados (defina a conexão do banco de dados em .env antes de migrar)
   ```sh
   php artisan migrate
   ```
9. Inicie o servidor de desenvolvimento local
   ```sh
   php artisan serve
   ```

Agora você pode acessar o servidor em http://localhost:8000

10. TL;DR lista de comandos
  ```sh
  git clone git@github.com:gothinkster/laravel-realworld-example-app.git
  cd laravel-realworld-example-app
  composer install
  cp .env.example .env
  php artisan key:generate
  php artisan jwt:generate 
  ```

11. Certifique-se de definir as informações de conexão de banco de dados corretas antes de executar as variáveis de ambiente de migração
  ```sh
  php artisan migrate
  php artisan serve
  ```

### Semeando banco de dados

Preencha o banco de dados com dados iniciais com relacionamentos que incluem usuários, artigos, comentários, tags, favoritos e seguidores. Isso pode ajudá-lo a começar a testar a API rapidamente ou acoplar um front-end e começar a usá-lo com conteúdo pronto.

Abra o DummyDataSeeder e defina os valores de propriedade conforme sua necessidade
  ```sh
  database/seeds/DummyDataSeeder.php
  ```

Execute o seeder do banco de dados e pronto
  ```sh
  php artisan db:seed
  ```
Observação: é recomendável ter um banco de dados limpo antes da propagação. Você pode atualizar suas migrações a qualquer momento para limpar o banco de dados executando o seguinte comando
  ```sh
  php artisan migrate:refresh
  ```

### Docker

Para instalar com o Docker, execute os seguintes comandos:
  ```sh
  git clone git@github.com:gothinkster/laravel-realworld-example-app.git
  cd laravel-realworld-example-app
  cp .env.example.docker .env
  docker run -v $(pwd):/app composer install
  cd ./docker
  docker-compose up -d
  docker-compose exec php php artisan key:generate
  docker-compose exec php php artisan jwt:generate
  docker-compose exec php php artisan migrate
  docker-compose exec php php artisan db:seed
  docker-compose exec php php artisan serve --host=0.0.0.0
  ```