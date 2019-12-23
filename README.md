# **CodeGym Music**

**_I. Usage_**

1.  Create file .env:

        cp .env.example .env
    
    Change value in .env file to according project order

2.  Install dependence: 

        composer install
3.  Make laravel key:

        php artisan key:generate
4.  Run migration to create table in database

        php artisan migrate
5.  Run jwt secret

        php artisan jwt:secret
6.  Run project

        php artisan serve
