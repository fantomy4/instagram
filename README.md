<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

```
Налаштування для запуску

В C:\xampp\htdocs\pv113
git clone https://github.com/fantomy4/instagram

Переіменувати папку instagram на instagram.pv113.com

Добавити:
в C:\xampp\apache\conf\extra\httpd-vhosts.conf
<VirtualHost *:80>
DocumentRoot "C:\xampp\htdocs\pv113\instagram.pv113.com\public"
ServerName instagram.pv113.com
<Directory "C:\xampp\htdocs\pv113\instagram.pv113.com\public">
AllowOverride All
Order allow,deny
Allow from all
</Directory>
</VirtualHost>


в C:\Windows\System32\drivers\etc\hosts
127.0.0.1 instagram.pv113.com


Команди:
npm i
composer install
php artisan key:generate
php artisan migrate

Запуск:
php artisan serve
npm run dev

```
