####Install steps
This project is developed in laravel, using blade templates.
First step is download the source code.
run next command for install all the dependences you need:
`$ composer install`
set the values of database data on .env file, located at root of project.
run next command to create tables required for the project:
`$ php artisan migrate --seed `
is very importand don't forget the param seed in the command line.
Use one of users created in the table users created on the database, the password is the word _password_ for all users generated.
