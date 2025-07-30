# E-Commerce Project

This is an e-commerce project built with Laravel.

##demo

https://github.com/user-attachments/assets/9e5835dc-26c7-4964-9dbd-9c99fb7296e1

## Prerequisites


Before you begin, ensure you have the following installed on your system:

-   **PHP**: Version 8.2 or higher.
-   **Composer**: For PHP dependency management.
-   **Node.js & npm (or Yarn)**: For front-end asset compilation.
-   **Database**: MySQL

## Installation

Follow these steps to set up the project locally:

1.  **Clone the repository:**

    ```bash
    git clone https://github.com/CasienDetra/Keyboard___Store.git
    cd art___e-store
    ```


2.  **Install PHP dependencies:**

    ```bash
    composer install
    ```

3.  **Install Node.js dependencies:**

    ```bash
    npm install
    # or yarn install
    ```

## Environment Setup

1.  **Copy the environment file:**

    ```bash
    cp .env.example .env
    ```

2.  **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

3.  **Configure your database:**
    Open the `.env` file and update the database connection details (DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD) to match your local database setup.

    Example for MySQL:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

## Database Migration and Seeding

1.  **Run database migrations:**
    This will create the necessary tables in your database.

    ```bash
    php artisan migrate
    ```

2.  **Seed the database (optional):**
    If you have seeders to populate your database with dummy data, run:

    ```bash
    php artisan db:seed
    ```

## Running the Application

1.  **Start the Laravel development server:**

    ```bash
    php artisan serve
    ```

    This will typically start the server at `http://127.0.0.1:8000`.

2.  **Compile and hot-reload front-end assets:**
    Open a new terminal window and run:

    ```bash
    npm run dev
    # or yarn dev
    ```

    This will compile your CSS and JavaScript and provide hot-reloading for development.

3.  **Access the application:**
    Open your web browser and navigate to the URL provided by `php artisan serve` (e.g., `http://127.0.0.1:8000`).
