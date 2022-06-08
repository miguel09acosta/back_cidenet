# Instrucciones


## Clonar repositorio
git clone https://github.com/miguel09acosta/back_cidenet.git

## Configurar env
crear .env con la siguiente información que apunta a una base de datos en la nube

DB_CONNECTION=mysql

DB_HOST=us-cdbr-east-02.cleardb.com

DB_PORT=3306

DB_DATABASE=heroku_7397587f8e1fcdf

DB_USERNAME=b23a12043ea7a8

DB_PASSWORD=ed0929ad



## Correr migraciones
php artisan migrate:fresh --seed

aca se crean todos los datos semilla y un super admin con usuario: miguel09acosta@gmail.com y password: 123

## Documentacion Api
publicada con postman en https://documenter.getpostman.com/view/12311903/Uyxhn79e


<br><a></a>