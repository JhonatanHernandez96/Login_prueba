<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tecnologías

Para la realización de esta prueba se utilizaron las siguientes tecnologías:

### Backend

- PHP 7.4
- MYSQL 5.7
- Laravel 8
- Laravel Jetstream
- Laravel-Permission | Spatie (Roles y Permisos)

### Frontend 

- Livewire (Front)
- AlpineJS (Front)
- Tailwild CSS (Front)
- Bootstrap 4 (Gestión Administrativa)

## Ejecución

Para la ejecución del aplicativo se recomienda usar Laragon ya que este utiliza servidores personalizados el cual facilita la ejecución de los datos de prueba (es opcional) igualmente dejare las instrucciones en caso de que allá problemas. 

* Clonar el repositorio 

	    git clone https://github.com/JhonatanHernandez96/Prueba_blog.git
        cd Prueba_blog

* crean el archivo .env

	    cp .env.example .env

si presentan problemas lo pueden crear en el editor de codigo


* Instalar Paquetes para Laravel: 

	    composer install
	    npm install
	
* crear la bse de datos ya sea en PhpMyadmin y en el archivo .env verificar lo siguiente

        DB_CONNECTION=mysql
        DB_DATABASE=prueba_blog (en caso de que su db tenga otro nombre lo debe poner)
        FILESYSTEM_DRIVER=public (para poner almacenar las imágenes de prueba)

* Ejecutan todas las migraciones(en caso de presentar problemas realizar otros pasos)

        php artisan migrate --seed 

si presentan problemas ejecutando los seeder los realiza de manera independiente en este orden:

    php artisan db:seed --class=RoleSeeder
    php artisan db:seed --class=UserSeeder

tengan en cuenta que al hacerlo de esta manera el Aplicativo no tendrá posts, categorías ni tags de prueba el usuario admin deberá crearlos desde 0 (categorías,tags,posts) en ese orden.
esto hace que se ejecuten los roles y después el usuario superAdmin

* por ultimo 

        npm run dev

* Credenciales (tener en cuenta que el usuario admin debe dar el rol a un usuario nuevo registrado para que el pueda crear posts, también re puede crear nuevos roles si se requiere )

	    email: admin@hotmail.com
	    password: 123456
