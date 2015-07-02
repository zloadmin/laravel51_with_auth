# Laravel 5.1 with Custom Authentication
![Login Page](https://raw.githubusercontent.com/zloadmin/laravel51_with_auth/master/public/img/loginpage.jpg)

# How to install

Run

```bash
$ git clone https://github.com/zloadmin/laravel51_with_auth.git laravel
$ cd laravel
$ composer install
$ cp .env.example .env
```
## Edit file .env
Seting Data Base

```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```
And Mail
```
MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```
Run
```bash
$ php artisan migrate
$ php artisan db:seed
$ php artisan key:generate
$ php artisan serve
```
Open [http://localhost:8000/ ](http://localhost:8000/ )

**Email:** admin@admin.com

**Password:** admin