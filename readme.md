# PHP Projects in Learning Phase

This repository contains various PHP projects created during the learning phase. The projects included are:

1. **Note Taker CRUD App**: A simple application for creating, reading, updating, and deleting personal notes.
2. **URL Shortener**: An application to shorten long URLs.
3. **Secure Authentication System**: A secure authentication system for applications.

## Installation and Configuration

### Cloning the Repository

1. Clone the repository using the following command:
   ```bash
   git clone https://github.com/your-username/php-projects-in-learning-phase.git
If you want a better experience, consider renaming the directory to your preference:

mv php-projects-in-learning-phase your-preferred-directory-name
Setting Up the Development Environment
Using XAMPP or WAMP
Place the cloned directory in the htdocs directory of XAMPP (or the www directory for WAMP).

Start the Apache server from the XAMPP or WAMP control panel.

Access the project by navigating to http://localhost/your-preferred-directory-name in your web browser.

## Using PHP Built-in Server
Navigate to the project directory:
   ```bash
   php -S localhost:80 -t public
   ```

If the above command does not work, create a .htaccess file in the root directory with the following content:

### apache

   ```bash
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ public/$1 [L]
```

## Restart the PHP built-in server.

# Projects Overview
Note Taker CRUD App
Create, read, update, and delete personal notes.
Simple and user-friendly interface.
URL Shortener
Shorten long URLs.
Easily manage and track shortened URLs.
Secure Authentication System
Secure user authentication system.
Includes features like user registration, login, and password management.
Contributing

## Contributions are welcome! Feel free to submit issues or pull requests.