## About this project

This is a simple file uploading project, made with:
- [Laravel]('https://https://laravel.com) v6.0
- [Twitter Bootstrap]('https://getbootstrap.com/) v4.3.1
- [MySQL]('https://www.mysql.com/)

## How to run - Instructions
- Clone this project and initialize required composer packages with this command in your terminal:
```
composer install
```

- Configure your .env file with the DB that you're going to use, first copy it:
```
cp .env.example > .env
```

- Generate your app key:
```
php artisan key:generate
```

- Migrate all of the required database migrations with:
```
php artisan migrate
```

- If you're not using any VM or Laravel Valet/Homestead, just run:
```
php artisan serve
```
