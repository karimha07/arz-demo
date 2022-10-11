## Requirements
- [composer](https://getcomposer.org/download/)
- [php v8.1](https://wampserver.aviatechno.net/files/php/wampserver3_x64_addon_php8.1.11.exe).
- [git](https://gitforwindows.org/)

## Installation

- git clone https://github.com/karimha07/arz-demo.git
- create database that named arz_demo
- create .env file and copy the content of .env.example file to it

please run the following commands in the terminal
````
composer install

php artisan key:generate

php artisan migrate:fresh --seed

php artisan optimize

php artisan serve

````
- Then you can go to "172.0.0.1/admin"
- The project by default contains a superadmin user you can use it to login
with email "superadmin@admin.com" and password "password"

## Using the user management System
- By default, superadmin is the only user that is able to create roles and permissions
- To create new role go to Roles page from the dashboard and click create new role
- By default permissions are created, permissions are (*, read, create, update, delete)
- to assign a permission to a role go to the Permission Role page from the dashboard and click create permission role 
then you can assign a permission eg "create" and "read" to a role eg "admin" and it should be assigned to a model eg 
"Stock" the result of this will be an admin that have access to create departments. In this case admin wouldn't be able 
to create new stock if he doesn't have the ability to read.

Note : '*' means that the role will have all the permissions.
