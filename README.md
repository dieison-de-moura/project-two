# Configurando o projeto

## Requisitos
* PHP 7.3 ou >
* MySQL 8 ou >
* Apache2 --> Caso não tenha apache configurado, é possível utilizar o servidor do laravel com o comando php artisan serve
* Composer*

## Passo a passo
* Descompactar o arquivo .zip na pasta onde o apache é executado
* Configurar a conexão do banco de dados no arquivo .env (Caso não tenha banco de dados, é preciso criar um)
* Após a configuração do banco de dados, executar o comando php artisan migrate, para criar as tabelas
* É necessário entrar na pasta public do projeto, para que entre na home
* *Caso o projeto seja baixado do git ou a pasta **vendor** não existe, é preciso executar o comando composer update
