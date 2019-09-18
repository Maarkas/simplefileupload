## About this project

This is a simple file uploading project made with Laravel 6.0 (PHP 7.2)

## Instructions
- Clone this project and initialize required composer packages with this command in your terminal:
```
composer install
```

- Configure your .env file with the DB that you're going to use, first copy it:
```
cp .env.example > .env
```

- Migrate all of the required database migrations with:
```
php artisan migrate
```

- If you're not using any VM or Laravel Valet/Homestead, just run:
```
php artisan serve
```