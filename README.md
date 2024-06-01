# Laravel To-Do List Application

A basic To-Do List application built using Laravel and Tailwind CSS. This application allows users to manage their tasks with features such as user registration, authentication, role-based access, and CRUD operations for tasks.

## Requirements

- PHP >= 8.2
- Composer
- Laravel >= 11.0
- Node.js & npm
- MySQL or any other supported database

## Installation

### Clone the Repository

```bash
git clone https://github.com/rakib-587/todo-list.git
```

### Then cd into the folder with this command
```
cd todo-list
```

## Install Dependencies

### Backend
```bash
composer install
```

### Frontend
```bash
npm install
```

## Environment Setup

1. Copy the `.env.example` file to `.env`:
```bash
cp .env.example .env
```

2. Generate the application key:
```bash
php artisan key:generate
```

3. Configure your database settings in the `.env` file:
```
Db_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

## Database Setup

1. Run the migrations:
```bash
php artisan migrate
```

2. Seed the database:
```bash
php artisan db:seed
```

## Compile Assets
```bash
npm run build
```

## Running the Application
Start the development server:
```bash
php artisan serve
```
Browse the URL displayed in the console (typically http://127.0.0.1:8000)

## Features

- User Registration and Authentication using Laravel Breeze.
- User roles (Admin and Employee) with role-based access control.
- CRUD operations for tasks (Create, Read, Update, Delete).
- Task management with completion status and prioritization.
- Responsive UI built with Tailwind CSS.

## Usage

### User Registration
Vjit the `/register` route to create a new user account.

### User Login
Visit the `/login` route to login with your credentials.

### Task Management
After logging in, you will be redirected to the tasks list page. From here, you can:
- Create new tasks.
- Edit or delete existing tasks.
- Mark tasks as completed.
- Search and filter tasks by title, status, and priority.

## Admin User
The database seeder includes an admin user with the following credentials:
- Email: admin@example.com
- Password: password

## Test User
The database seeder includes a test user with the following credentials:
- Email: test@example.com
- Password: password

## Running Tests
To run the unit tests, use the following command:
```bash
php artisan test
```