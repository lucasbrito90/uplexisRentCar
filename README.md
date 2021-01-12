<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o projeto

A aplicação procura por carros  através do site https://www.questmultimarcas.com.br/ via CURL. Depois de tratada as informações através de uma Facade criada e chamada de SyncTagsKeysToArrays os dados dos carros são extraídos e inseridos no banco de dados. Onde depois pode ser listado através do link no menu superior visualizar carros. Todas as rotas das aplicações são autenticadas pelo middleware auth. Foi utilizado o framework TailWindCSS para auxiliar no front-end, junto com components blades criados.



- SyncTagsKeystoArrays ( Facade criada para tratar html e transformar em um array de objetos do tipo Car).
- CarController ( Controlador criado para receber dados das rotas e tratar os dados e encaminha-los para a camda de visualização ).
- \Providers\SyncTagsKeysToArray service provider que retorna a classe que trata o html e será utilizado com uma Facade.
- UsersTableSeeder seed criada para prover um usuário administrador. usuário : admin@admin.com & senha: admin.
- dashboard.blade.php página principal que contém a estrutura que será extendida para as telas posteriores.
- listcar.blade.php tela que exibirá a lista de carros que poderam ser filtrados e removidos pelo botão excluir.
- foi criado alert-cards alertas nas telas.
- serch-area.blade.php component com formulário para pesquisa.
- show-cars component responsável por exibir os cards dos carros.

A aplicação foi construida em computador linux 20.04 e com o banco de dados mysql originalmente  e PHP 7.3. Fique a vontade para escolher o banco de dados da sua preferência. lembrando que deverá informado no arquivo .env.

## Comandos para execução do banco

- Necessário criar a base de dados com nome **rentcar**
- Favor rodar o comando **npm i & npm run dev** para instalação da biblioteca do Breeze para autenticação do laravel e o tailwindcss estilização 
    atualmente estou utilizando npm 7.3.0 e node 15.5.1
- O comando **php artisan db:seed** para criação do usuário : **admin@admin.com** e senha : **admin**
- para rodar servidor do Laravel **php artisan serve**

