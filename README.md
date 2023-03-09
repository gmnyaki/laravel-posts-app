# Laravel Posts App : MVC Pattern Implementation using PHP and Laravel 

## Overview 
This project is a demonstration of how to implement the Model-View-Controller (MVC) pattern using PHP and Laravel. The MVC pattern is a widely used architectural pattern that separates an application into three interconnected components: the model, the view, and the controller. The model represents the data and business logic of the application, the view represents the user interface, and the controller acts as an intermediary between the model and the view.

In this project, we have created a simple application that allows users to add, edit, and delete tasks. The tasks are stored in a MySQL database, and Laravel's Eloquent ORM is used to interact with the database.

## Requirements

To run this project, you will need the following software installed on your system:

- PHP 7.3 or higher
- MySQL 5.7 or higher
- Composer
- Laravel 8

## Installation
To install and run this project on your system, follow these steps:

1. Clone the repository to your local machine:
```
git clone https://github.com/gmnyaki/laravel-posts-app.git 

```
2. Navigate to the project directory:
```
cd laravel-posts-app

```
3. Install the project dependencies using Composer:

```
composer install

```
4. Create a copy of the .env.example file and rename it to .env:
```
cp .env.example .env

```
5. Generate an application key:
```
php artisan key:generate
```
6. Configure the database settings in the .env file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
7. Migrate the database tables:
```
php artisan migrate
```
8. Start the development server:
```
php artisan serve
```
## Usage
To use the application, open a web browser and navigate to the URL(http://blog.test) displayed in the terminal when you started the development server. You will see a login, register or create a post. First, register and account to be able to post on the app. Once and account is created successfully, you will be redirected to a dashboard, from here you will see a link to create posts or view posts. Type your post and click save. You can only delete or edit your own posts using the links provided.
## Project Structure
The project is structured according to Laravel's conventions: 

**'app/Models**: Contains the Eloquent models for the application.  
**app/Http/Controllers**: Contains the controllers for the application.  
**app/Http/Requests**: Contains the form request validation classes for the application.  
**resources/views**: Contains the views for the application.  
**routes/web.php**: Contains the routes for the application.

## Contributing  
If you would like to contribute to this project, please fork the repository and submit a pull request.

## Concepts
This a simple project demonstrating use of techniques such as protecting your pages from cross-site scripting attacks. See **resources/views/posts**    
Form validation using bootstrap and laravel form requests classes. See **app/Http/Requests**    
Application optimization using eager loading to avoid unnecessary queries. See **app/http/controllers/Posts/PostController**  
Use of middleware to filter out requests. See **app/http/controllers/Posts/PostController**  
Project structuring.  
Pagination of the query results. See **resources/views/posts**  
Class demonstrating attributes that should be mass-assignable and guarded attributes**app/Models**  

## Demo images 
![login demo](https://user-images.githubusercontent.com/25588619/223938765-65ccc3e8-946d-4828-bb20-839b133095a4.JPG)
![register demo](https://user-images.githubusercontent.com/25588619/223938794-26032821-ef44-42c5-8042-18a95961967f.JPG)
![Readme cover](https://user-images.githubusercontent.com/25588619/223936736-69822b57-2b8b-4a73-80b4-05208ca9b0c6.JPG)


## License

This project is licensed under the MIT License. See the **LICENSE** file for details.
