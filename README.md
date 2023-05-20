### Task Management with Laravel

This is a simple Laravel Web Application for task management. 

It functionalities include CRUD for both Project and Task.

It also has drag and drop functionality for the tasks. 

Each Project can have many tasks.

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

* Open your `.env` file and change leave your database name as `task_management`.

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

* If there is no styling, run

```bash
$ npm run dev
```

* On the homepage, a user has two option to either
    - Create a new project.
    - View recent project.

* If you followed the instruction earlier and seeded data to the database, you will see list of projects on a dropdown menu.

* You have the option to either create, read, update or delete any project from the database.

* Each project can have many tasks and you have the option of creating a new task.

* Each task can be read, updated or deleted from the database.

* You can drag and drop any task based on priority in the database and each task is displayed by ascending order of priority (from first to last).

* When dragged and dropped in any order, it automatically updates in the database.

* Use mobile data for the drag and drop functionality to work.

* Contact me if you run into any issues.