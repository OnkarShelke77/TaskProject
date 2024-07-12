# Task Management System

## Requirements

- PHP
- Composer
- MySQL
- Node.js
- NPM

## Setup

Environment Setup
1. Clone the repository:
git clone
cd TaskProject

2.Install PHP dependencies:
composer install

3.Install NPM dependencies:
npm install

4.Create a copy of the environment variables file:
cp .env.example .env

5.Generate an application key:
php artisan key:generate

##Set up the database:

1.Create a MySQL database.
2.Update the .env file with your database credentials.
3.Run the migrations and seeders:

##Running the Development Server

1.Start the Laravel development server.
php artisan serve

2.Compile assets with Vite for development
npm run dev

##Features
User authentication with multiple roles (Admin and User)
CRUD operations for tasks
Responsive UI using Tailwind CSS, Daisy UI, and ShadCN
Pagination for the task list

##Project Structure
app/: Contains application-specific PHP code.
config/: Configuration files for Laravel.
database/: Database migrations and seeders.
public/: Web-accessible assets.
resources/: Vue components, views, and frontend assets.
routes/: Application routes.
storage/: Temporary storage and logs.
tests/: PHPUnit tests.
vendor/: Composer dependencies.
.env: Environment variables configuration.

##Implementation Details
Backend: Built with Laravel, PHP framework.
Frontend: Utilizes Vue.js with Vite for fast development.
Database: MySQL database used for data storage.
Dependencies: Managed via Composer for PHP and NPM for JavaScript.
