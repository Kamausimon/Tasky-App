 Tasky

![Tasky](https://img.shields.io/badge/Task%20Manager-Laravel%20%26%20React-blueviolet?style=flat-square)

A full-stack Task Management Application built with Laravel for the backend and React for the frontend. This application allows users to manage tasks efficiently with features such as user authentication, project organization, task categorization, and more.

## Table of Contents

- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Configuration](#configuration)
  - [Database Migration](#database-migration)
  - [Running the Application](#running-the-application)
- [Project Structure](#project-structure)
- [API Endpoints](#api-endpoints)
- [Usage](#usage)
  - [Authentication](#authentication)
  - [Task Management](#task-management)
  - [Projects](#projects)
  - [Categories & Tags](#categories--tags)
  - [Comments & Attachments](#comments--attachments)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Features

- **User Authentication**: Secure registration, login, and password management with Laravel Breeze.
- **Task Management**: Create, update, delete, and view tasks with ease.
- **Project Management**: Organize tasks within projects for better management.
- **Task Categorization**: Classify tasks using categories and tags.
- **Comments & Attachments**: Add comments and upload files related to tasks.
- **Responsive Design**: Mobile-friendly interface for a seamless user experience.
- **Role-Based Access Control**: Optional roles and permissions for different user levels.

## Getting Started

### Prerequisites

Before you begin, ensure you have met the following requirements:

- **PHP 8.1** or higher
- **Composer**
- **Node.js** and **NPM**
- **MySQL** or another supported database
- **Laravel 10** or higher

### Installation

Follow these steps to set up the application locally:

1. **Clone the repository**

   ```bash
   git clone https://github.com/yourusername/task-management-app.git
   cd task-management-app
Install backend dependencies

bash
Copy code
composer install
Install frontend dependencies

bash
Copy code
npm install
Configuration
Environment Variables

Copy the example environment file and configure your local settings:

bash
Copy code
cp .env.example .env
Edit the .env file to match your database and other local configurations:

plaintext
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=your_password

# For Email settings
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
Generate Application Key

bash
Copy code
php artisan key:generate
Database Migration
Run the migrations to create the necessary tables in your database:

bash
Copy code
php artisan migrate
(Optional) Seed the database with initial data:

bash
Copy code
php artisan db:seed
Running the Application
Start the development server and build assets:

Run Laravel server

bash
Copy code
php artisan serve
Compile React frontend

bash
Copy code
npm run dev
The application should now be accessible at http://localhost:8000.

Project Structure
Here's a brief overview of the project's file structure:

plaintext
Copy code
task-management-app/
├── app/
│   ├── Http/
│   ├── Models/
│   └── ...
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── ...
├── resources/
│   ├── js/
│   │   ├── components/
│   │   ├── pages/
│   │   └── ...
│   └── views/
├── routes/
│   ├── api.php
│   └── web.php
├── public/
├── .env
├── package.json
├── composer.json
└── ...
API Endpoints
Here are the available API endpoints for the application:

Authentication
Method	Endpoint	Description
POST	/register	Register a new user
POST	/login	Login a user
POST	/logout	Logout a user
Tasks
Method	Endpoint	Description
GET	/api/tasks	Retrieve all tasks
POST	/api/tasks	Create a new task
GET	/api/tasks/{id}	Retrieve a specific task
PUT	/api/tasks/{id}	Update a specific task
DELETE	/api/tasks/{id}	Delete a specific task
Projects
Method	Endpoint	Description
GET	/api/projects	Retrieve all projects
POST	/api/projects	Create a new project
GET	/api/projects/{id}	Retrieve a specific project
PUT	/api/projects/{id}	Update a specific project
DELETE	/api/projects/{id}	Delete a specific project
Categories & Tags
Method	Endpoint	Description
GET	/api/categories	Retrieve all task categories
POST	/api/categories	Create a new task category
GET	/api/categories/{id}	Retrieve a specific task category
PUT	/api/categories/{id}	Update a specific task category
DELETE	/api/categories/{id}	Delete a specific task category
Method	Endpoint	Description
GET	/api/tags	Retrieve all task tags
POST	/api/tags	Create a new task tag
GET	/api/tags/{id}	Retrieve a specific task tag
PUT	/api/tags/{id}	Update a specific task tag
DELETE	/api/tags/{id}	Delete a specific task tag
Comments & Attachments
Method	Endpoint	Description
GET	/api/tasks/{id}/comments	Retrieve all comments for a task
POST	/api/tasks/{id}/comments	Add a comment to a task
DELETE	/api/comments/{id}	Delete a specific comment
Method	Endpoint	Description
POST	/api/tasks/{id}/attachments	Upload an attachment for a task
GET	/api/attachments/{id}	Download a specific attachment
DELETE	/api/attachments/{id}	Delete a specific attachment
Usage
Authentication
Register: Create a new account with a name, email, and password.
Login: Authenticate with your email and password to access the application.
Logout: Securely end your session.
Task Management
Create Task: Add a new task with a title, description, due date, and priority level.
Edit Task: Update existing task details as needed.
Delete Task: Remove tasks that are no longer needed.
View Tasks: See a list of all tasks with sorting and filtering options.
Projects
Create Project: Initiate a new project to group related tasks.
Edit Project: Update project information such as name and description.
Delete Project: Remove projects and associated tasks if necessary.
View Projects: See a list of all projects with task associations.
Categories & Tags
Add Category: Organize tasks by creating categories with names and colors.
Edit Category: Update category details.
Delete Category: Remove categories and associated task links.
Add Tag: Label tasks with tags for better organization.
Edit Tag: Update tag details.
Delete Tag: Remove tags and associated task links.
Comments & Attachments
Add Comment: Provide additional details or updates on tasks.
Delete Comment: Remove unnecessary or outdated comments.
Upload Attachment: Attach files related to tasks for reference.
Download Attachment: Access attached files directly from the task interface.
Delete Attachment: Remove attachments when no longer needed.
Testing
Run the following command to execute the application's test suite:

bash
Copy code
php artisan test
This will run unit and feature tests to ensure the application behaves as expected.


