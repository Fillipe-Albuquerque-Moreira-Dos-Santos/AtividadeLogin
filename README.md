<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## -------------------------------------------------------------------------------------------------------
## Nomes
### Fillipe Albuquerque
### Guilherme Oliveira
### Erika
### Deibson
### Gabriel Cardoso
### Davi Emanuel
### Jadielle Cordeiro Neves dos Santos

## -------------------------------------------------------------------------------------------------------

# Instalação do Sistema de Framework Login LiveWire

#### Professor Araya siga a lista de comandos abaixo:

- Entre no PhpMyAdmin e crie um DB com o nome **loginlaravel**
- dentro do xampp htdocs crie uma pasta para fazer o git clone
- git clone https://github.com/Fillipe-Albuquerque-Moreira-Dos-Santos/AtividadeLogin
- Após o git clone não se esqueça de dar um cd dentro da AtividadeLogin
- Instalar o composer install caso não tenha entre nesse site **https://getcomposer.org/**
- Dentro do terminal do visual StudioCode use o comando **composer install**
- Depois esse comando cp .env.example .env
- Caso necessário php artisan key:generate
- php artisan jetstream:install livewire (Instalação do login no seu sistema)
- Depois dê um **php artisan migrate** (Comando para subir os dados pro banco loginlaravel)
- php artisan migrate

Agora tudo pronto, basta usar o "php artisan serve" e acessar o endereço http://localhost:8000

Foi utilizado uma estrutura de base de dados simples com a tabela de usuarios do proprio laravel, 
uma tabela para persistir os Logins cadastrados.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Tela Principal 
![preview img](/foto1.png)
<br><br>
## Tela de Entrar
![preview img](/foto2.png)
<br><br>
## Registrar
![preview img](/foto3.png)

## Redefinição de Senha
![preview img](/tela4.png)

## Edição de Perfil
![preview img](/foto5.png)
