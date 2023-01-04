# A Simple Todo App Using Laravel

## Usage

To run this Laravel project, you will need to have PHP, Composer, and a web server installed on your machine.

First, clone the repository on your local machine by running:
```
git clone https://github.com/misterneo/laravel-todoapp.git
```
Next, navigate to the project directory:
```
cd laravel-todoapp
```
Install the required dependencies by running:
```
composer install
```
Copy the example environment file and make the required configuration changes in the .env file:
```
cp .env.example .env
```
Generate an app encryption key:
```
php artisan key:generate
```
Run the database migrations:
```
php artisan migrate
```
Start the development server:
```
php artisan serve
```

This will start the development server at http://localhost:8000. You can now access the Laravel application in your browser.

## License

The MIT License (MIT).
