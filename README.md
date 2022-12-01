Laravel 9.0 Starter App with Role Based Access Control. It is very painful when someone is starting a new project.
Everyone want to choose best folder structure and want to use best practice for his needs.
Role Based Access control is vital for every modern application.

## Requirements
This project has the following dependencies:-

- php 8.0 >

## How to run locally

- Make sure you have composer and npm installed and php version 8.0 or greater
- go to the project directory and follow the following steps
- in the terminal run `composer install`
- in the terminal execute `cp .env.example .env`
- edit `.env` file for database credentials
- run `php artisan migrate`
- run `php artisan db:seed`
- run `npm install`
- run `npm run dev`
- run `php artisan serve`
- For Super Admin log in using Login: `admin@gmail.com` Password: `password`
- For Manager log in using Login: `manager@gmail.com` Password: `password`
- For User log in using Login: `user@gmail.com` Password: `password`
