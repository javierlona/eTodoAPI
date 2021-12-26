# eTodos API

A RESTful API for to do's.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and production purposes.

### Prerequisites

What things you need to install the software and how to install them

```
PHP 7.4
MySQL
Laravel 8
```

## Installing

### Local
```
composer install
php artisan migrate
php artisan serve
```

To view the endpoints
```
php artisan route:list
```

## Deployment

Add additional notes about how to deploy this on a live system

### Production
Zip the entire contents of the project. Upload the Zip file to Shared hosting provider. Then unzip contents into empty directory. Export MySQL database. Import MySQL database to Shared hosting provider MySQL database. Update .env file with MySQL credentials.

## Built With

* [Laravel](https://laravel.com/) - The web framework used

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
