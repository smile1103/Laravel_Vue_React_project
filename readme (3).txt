-MYSQL
	1. install xampp
	2. open xampp control panel and start MySql
	3. open Navicat or other application for control database.
	4. just create new database named 'laravel'
	Note: mysql username:root, password:(NO)
	
-For laravel
	1. composer install
	2. php artisan serve
	
-For Vue, React, Vuetify
	1. npm install
	2. just copy vuetify-media-player and replace in node_modules
	3. npm run watch

-For JSON
	After successfully install, you can see
	public/menu.json which menu builder informations stored.
	public/client_main_content.json which manage the customers' main landing page.

Note:
	you should open and see routes/web.php
	there are urls.
	
	/admin : the admin page will appear, there is menu-builder.
	/login_one, two, three : login, register page which built with ReactJS
	/client_main, ... : customer page with url.
	others: you don't need to know exactly, they just use json.
	
