# Projeto de Intranet do IFPE Campus Pesqueira

Este projeto tem como objetivo desenvolver um site para uso interno no IFPE campus Pesqueira.

## Ambiente necessário:

* PHP 7.1 ou superior;
* Composer 1.5.2 ou superior;
* Servidor MySQL 5.7 ou superior;

## Instruções para utilizar o projeto:

* Clonar o projeto no Github:
>`git clone https://github.com/cpes-cgti/intranet`
* Acesse o diretório do projeto:
>`cd intranet`
* Crie o arquivo de ambiente *.env* a partir do arquivo de exemplo *.env.example*:
>`cp .env.example .env`
* Utilize o composer para baixar as dependências do projeto:
>`composer update`
* Crie a *KEY* de sua aplicação Laravel:
>`php artisan key:generate`
* Edite o arquivo *.env* com suas configurações:
> Configurações da Aplicação:
>> APP_NAME=**NOME**    
>> APP_ENV=**AMBIENTE**`local | production`  
>> APP_KEY=**KEY**`php artisan key:generate`    
>> APP_DEBUG=**DEBUG**`true | false` 
>> APP_LOG_LEVEL=**LOG_LEVEL**`debug`   
>> APP_URL=**URL**`http://localhost`  
>  	
> Configurações de Banco de dados:  
>> DB_CONNECTION=**DRIVER**`mysql`  
>> DB_HOST=**HOST**`localhost`  
>> DB_PORT=**PORTA**`3306`  
>> DB_DATABASE=**BANCO DE DADOS**`cpes-cgti-intranet-db`    
>> DB_USERNAME=**USUÁRIO**`cpes-cgti-intranet-user` 
>> DB_PASSWORD=**SENHA**`********`  
* Crie e atualize o banco de dados:
>`php artisan migrate`  
>`php artisan migrate:refresh --seed`
#### Jobson Tenório do Nascimento - 1804315