# Built With:

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Logo's

<p align="center"><img src="..\..\image\icons\logo\logo2.png" alt="Teras Perempuan Logo" width="150px"> <img src="..\..\image\icons\logo\logo1.png" alt="Teras Perempuan Logo" width="150px"></p>

Logo Untuk teras Perempuan

# Teras Perempuan

## _Dev Documentation_

> Prerequisite :
> Make sure PHP was installed on your computer
> Install [composer](https://getcomposer.org/Composer-Setup.exe), see [documentation](https://getcomposer.org/doc/00-intro.md) to install on your operating system.
> Install [Valet](https://github.com/cretueusebiu/valet-windows) on your operating system through composer.

## Starter Kit

-   Git
-   VS Code
-   mySQL Workbench
-   Valet
-   XAMPP

## Technology Used

-   Laravel 9.x.x
-   HTML

## Directory Structure

> Folder akan ditulis dengan tanda (namafolder), contoh: (app), (database), (routes)
> Sebuah difila akan ditulis biasa lengkap dengan ekstensinya

| (app)
|----------- (http)
|-------------------- (controllers) // Berisi konfigurasi controller web
|----------- (models) // Berisi konfigurasi model untuk controller
| (database)
|----------- (factories) // untuk konfigurasi format data dummy
|----------- (migrations) // berisi migrasi tabel untuk database
|----------- (seeders) // untuk membuat data dummy sesuai yang ada pada factories
| (public)
|----------- (css) // folder berisi file css, termasuk tailwind css pada file output.css
|----------- (html) // berisi .html yang tidak muncul di halaman, tujuannya development halaman web
|----------- (image) // berisi assets, icons, logo, dll
|----------- (js) // berisi file konfigurasi javascript pada
|----------- (php) // berisi .php yang tidak muncul di halaman, tujuannya development halaman web
|----------- index.php // file utama web
| (resources)
|----------- (css) // berisi css input untuk tailwind css
|----------- (js) // berisi konfigurasi javascript untuk framework
|----------- (views) // berisi file blade dan folder view untuk ditampilkan pada halaman web
| (routes)
|----------- web.php // berisi url yang ada pada projek
|
| .env.example
| tailwind.config.js
|
|

## Running Web

1. Setelah clone atau pull projek melalui github, lakukan duplikat pada file:

```sh
// duplicate this file:
.env.example
// rename duplicated file with:
.env
```

2. Lakukan konfigurasi file `.env` pada baris dibawah To Do.

```sh
APP_NAME=Teras Perempuan
APP_ENV=development
APP_KEY=
APP_DEBUG=true
# Jika sudah menginstall valet, maka biarkan url seperti ini. Jika belum mengintall valet, silakan disesuaikan dengan local development url anda.
# To Do 1:
APP_URL=http://teras-perempuan.test

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

# Pada baris ini silakan disesuaikan dengan database yang digunakan. Jika menggunakan mySQL dari XAMPP, maka cukup ubah DB_DATABASE dengan nama skema database yang akan dituju (disarankan membuat skema database baru).
# To Do 2:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_app
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

3. Kemudian nyalakan MySQL database pada XAMPP. Jika menggunakan valet, jangan nyalakan apache pada XAMPP.
4. Buka folder projek pada VS Code.
5. Jalankan perintah dibah pada terminal VS Code di folder projek.

```sh
php artisan migrate
```

6. Cek pada mySQL workbench, apakah tabel sudah termigrasi dengan benar. Jika belum, lakukan kembali migrasi dengan perintah:

```sh
php artisan migrate:fresh
```

7. Web projek sudah bisa dijalankan dengan menggunakan beberapa cara:

-   XAMPP
    Link web akan menuju pada http://localhost/(folderprojek)/public
-   Valet
    Link web akan menuju pada http://teras-perempuan.test
-   PHP Artisan Server
    Cara ini dilakukan dengan menjalankan perintah:
    `php artisan serve`
    di terminal vs code pada folder projek.
    Biasanya link local web akan menuju http://127.0.0.1:8000

**Feel free to adding another documentation**
