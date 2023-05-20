### Task Management with Laravel

This is a simple Laravel Web Application for task management. It functionalities include CRUD for both Project and Task and also drag and drop functionality for the task. Each Project can have many tasks.

I used Livewire for the drag and drop functionality.

## Prequisities

The things you need before installing the project

* PHP 8+

* [Composer](https://getcomposer.org) 

* [Xampp](https://apachefriends.org/download.html)

## Installation

* Run `composer install` on your cmd or terminal to install composer and make sure you have php installed in your system.

* Navigate on the cmd, the folder path you want to store this project in and type the following code

```bash
#  clone this repository
$ git clone https://github.com/codejutsu1/task-management
```

* Open the project and create a file, `.env` on the root folder.

* Copy everything in `.env.example` and paste in the `.env` file.

* Open your `.env` file and change leave your database name as #task_management.

* By default, the username is root and you can leave the password empty. (For Xampp)

* Then run the following code 

```bash
# To generate app key
$ php artisan key:generate

# To migrate the database
$ php artisan migrate 

# To seed data to the database 
$ php artisan db:seed

# To run the project on a server
$ php artisan serve
# It will run on localhost:8000 or 127.0.0.1:8000 on your web browser.
```

## About the Project

* This is a simple task management project.