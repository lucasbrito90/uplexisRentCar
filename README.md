<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o projeto

A aplicação procura por carros  através do site https://www.questmultimarcas.com.br/ via CURL. Após o tratamento das informações, através de uma Facade criada e denominada de SyncTagsKeysToArrays os artigos são extraídos e inseridos no banco de dados, onde poderão ser listados através do link no menu superior "visualizar carros". Todas as rotas da aplicação são autenticadas pelo middleware auth e para auxiliar no front-end, junto com o blades components criados, foi utilizado o framework TailWindCSS.



- SyncTagsKeystoArrays ( Facade criada para tratar html e transformar em um array de objetos do tipo Car ).
- CarController ( Controlador criado para receber dados das rotas e tratar os dados e encaminhá-los para a camada de visualização ).
- \Providers\SyncTagsKeysToArray ( service provider retorna a classe que trata o html e será utilizado com uma Facade ).
- UsersTableSeeder ( seed criada para prover um usuário administrador. **usuário : admin@admin.com & senha: admin** ).
- dashboard.blade.php ( página principal que contém a estrutura que será extendida para as telas posteriores ).
- listcar.blade.php ( tela que exibirá a lista de carros que poderam ser filtrados e removidos pelo botão **"excluir"** ).
- component alert-card ( foi criado alert-cards para exibir os alertas nas telas ).
- serch-area.blade.php component ( como formulário para pesquisas ).
- show-cars component ( responsável por exibir os cards dos carros ).

A aplicação foi construida em computador **linux ubuntu 20.04**, com o **banco de dados mysql** originalmente  e **PHP 7.3**. Fique a vontade para escolher o banco de dados de sua preferência. Lembrando que deverá ser informado no arquivo **.env**.

## Comandos para execução do banco

- Necessário criar a base de dados com nome **rentcar**.
- **composer install** & **composer dump-autoload** para instalação das dependências do laravel.
- Favor rodar o comando **npm install** & **npm run dev** para instalação das bibliotecas do Breeze para autenticação do laravel e o tailwindcss para estilização da camda de visualização. Atualmente estou utilizando **npm na versão 7.3.0 e o node na versão 15.5.1**.
- **php arisan migrate** para migrar as tabelas da aplicação no banco de dados.
- O comando **php artisan db:seed** deve ser utilizado para criação do usuário : **admin@admin.com** e senha : **admin**.
- Para rodar o servidor do Laravel utilize o comando **php artisan serve**.

