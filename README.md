
### Stack de Desenvolvimento
#### Backend:
- PHP 8.1
- MySQL/MariaDB 10.5
- PHP-DI: 6.4
- Symfony/dotenv: 6.1

#### Frontend:
- Bootstrap 5.1

## Getting Start
1. Clone o repositorio `https://github.com/EliasFernandes02/testeFI.git`

2. Crie um banco de dados e configure um arquivo na raiz da aplicação `.env` utilizando o arquivo `.env.dist` como exemplo.

3. Para instalar as dependências, entre no diretório da aplicação e execute `composer install`

3. Rode as migrations

4. Para executar o projeto precisaremos subir um servidor PHP, para isso basta executar `php -S localhost:8000 -t public`

5. Abra seu navegador, acesse o endereço https://localhost:8000  ou a porta que desejar e pronto!

6. Atente-se para o banco de dados, no arquivo .env eu designei qual eu utilizei.

7. Utilize o insomnia para observar as rotas e fazer as operações
