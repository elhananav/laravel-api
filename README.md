----------

# Getting started

## Preperation

create new datsbase in MySQL server named: laravel_api

run the MySQL server

    all of this actions can be achived using XAMPP

## Installation


Clone the repository

    git clone https://github.com/elhananav/laravel-api.git

Switch to the repo folder

    cd laravel-api

Install all the dependencies using composer

    composer install

Run the database migrations

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## Database seeding

Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh
    