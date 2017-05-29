# README

# Installation

- Clone the repo into your `Code` directory
- Create a copy of the env file with `cp .env.example .env`
- Change line 8 to: DB_CONNECTION=sqlite
- Delete line 9 to 13 and save the .env
- Now start the server with `vagrant up`
- After your project is completely loaded enter it with `vagrant ssh`
- Change into the directory with `cd Code/SocialNetwork`
- Install composer with `composer install`
- Generate a key for your app with `php artisan key:generate`
- Set up your database with `touch database/database.sqlite`
- Migrate the database with `php artisan migrate`
- Start the server with `php artisan serve`
- Console will print address and port. Open that in your browser.
- Profit $$$
