# Basic CRUD Laravel App

This is a solution to the 'Intro to Laravel Practical' (without the update and delete functionality).

## Installation

-   Either use git

    ```
    git clone https://github.com/CHT2520/intro-to-laravel-code
    ```

    or download the repository and unzip into _htdocs_.

-   Then use composer to install the necessary packages

    ```
    composer install
    ```

-   Change the _httpd.conf_ file to change the DocumentRoot e.g.

    ```
    DocumentRoot "/xampp/htdocs/intro-to-laravel-code/public"
    <Directory "/xampp/htdocs/intro-to-laravel-code/public">
    ```

-   In VS Code copy the _.env.example_ and rename it as _.env_.

-   Change the database settings in this file to match your database e.g.

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=cht2520
    DB_USERNAME=root
    DB_PASSWORD=
    ```

-   Using PHP Artisan run the database migrations

    ```
    php artisan migrate:fresh --seed
    ```

-   You will also need to generate an encryption key

    ```
    php artisan key:generate
    ```

-   Open http://localhost and the basic film app should be working.
