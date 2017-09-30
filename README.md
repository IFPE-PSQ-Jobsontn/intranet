# Projeto de Intranet do IFPE Campus Pesqueira

Este projeto utiliza as liguagens e Tecnologias abaixo para desenvolver um site para uso interno no IFPE campus Pesqueira.

## Ambiente necessário:

* PHP 7.1 ou superior;
* Composer 1.5.2 ou superior;
* Servidor MySQL 5.7 ou superior;

## Instruções para utilizar o projeto:

> * Clonar o projeto no Github:
>> `git clone https://github.com/cpes-cgti/intranet`
> * Acesse o diretório do projeto:
>> `cd intranet`
> * Crie o arquivo de ambiente *.env* a partir do arquivo de exemplo *.env.example*:
>> `cp .env.example .env`
> * Utilize o composer para baixar as dependências do projeto:
>> `composer update`
> * Crie a *KEY* de sua aplicação Laravel:
>> `php artisan key:generate`
> * Edite o arquivo *.env* com suas configurações:
>> Configurações da Aplicação:
>>> APP_NAME=**Nome da Aplicação**
>>>
>>> APP_ENV=**local | production**
>>>
>>> APP_KEY=**Gerada pelo comando `php artisan key:generate`**
>>> APP_DEBUG=**true | false** 
>>> APP_LOG_LEVEL=**debug** 
>>> APP_URL=**http://localhost**	

>> Configurações de Banco de dados: 
>>> A

Jobson