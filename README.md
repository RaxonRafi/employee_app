# Employee Management App

## Overview

This Laravel-based Employee Management App provides a comprehensive solution for managing employees, attendance, payroll, leave requests, departments, designations, roles, and permissions.

## Current Features

-   **Employee Management**: Add, edit, soft-delete, restore, and permanently delete employees. Assign designations and departments to employees.
-   **Attendance Management**: Record daily attendance, filter attendance records, and generate attendance sheets as PDF.
-   **Payroll Management**: Add, edit, and view payroll details for employees, including salary components (basic, allowances, bonuses, tax).
-   **Leave Management**: Employees can submit leave requests, and admins can approve or decline them. Employees can view their leave history.
-   **Department Management**: Add, edit, and delete departments.
-   **Designation Management**: Add, edit, and delete designations, linking them to departments.
-   **User Management**: List users and assign roles to them.
-   **Role & Permission Management**: Create, edit, and delete roles and permissions, and assign permissions to roles.

## Installation Guide

### Prerequisites

-   PHP >= 8.1
-   Composer
-   MySQL or any other database supported by Laravel
-   Node.js and NPM (for frontend assets)

### Steps to Install

1. **Clone the Repository**

    ```bash
    git clone https://github.com/RaxonRafi/employee_app.git

    cd employee_app-main
    ```

2. **Install PHP Dependencies**

    ```bash
    composer install
    ```

3. **Install Frontend Dependencies**

    ```bash
    npm install
    ```

4. **Environment Setup**

    - Copy the `.env.example` file to `.env`:
        ```bash
        cp .env.example .env
        ```
    - Generate an application key:
        ```bash
        php artisan key:generate
        ```
    - Configure your database settings in the `.env` file:
        ```
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=emp_app
        DB_USERNAME=your_database_username
        DB_PASSWORD=your_database_password
        ```

5. **Run Migrations**

    ```bash
    php artisan migrate
    ```

6. **Seed the Database**

    ```bash
    php artisan db:seed
    ```

7. **Compile Frontend Assets**

    ```bash
    npm run dev
    ```

8. **Start the Development Server**

    ```bash
    php artisan serve
    ```

9. **Access the Application**
   Open your browser and navigate to `http://localhost:8000`.


