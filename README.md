# Cinema Ticket Management System (CTMS)

A web-based application for managing cinema operations, including movie listings, ticket bookings, and administrative tasks.

## Description

This Cinema Ticket Management System allows customers to browse movies, book tickets, and manage their accounts. Employees (Admins, Managers, and Front Desk Officers) can manage movies, theaters, bookings, and generate reports.

## Features

### Customer Features
- User registration and login
- Browse active and upcoming movies
- Book movie tickets with seat selection
- View booking history
- Submit feedback

### Employee Features
- **Admin**: Manage employees, theaters, view feedback
- **Manager**: Add/edit movies, manage showtimes
- **Front Desk Officer**: Handle bookings, cancel bookings, generate reports

## Tech Stack
- **Backend**: PHP 7.4+
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript
- **Libraries**: FPDF (for PDF reports), Boxicons, Swiper.js

## Installation

1. **Prerequisites**:
   - PHP 7.4 or higher
   - MySQL
   - Web server (e.g., Apache via XAMPP)

2. **Setup**:
   - Clone or download the project to your web server's document root (e.g., `C:\xampp\htdocs\CTMS` or `/var/www/html/CTMS`).
   - Install dependencies: Run `composer install` in `employees/Admin/`, `employees/Front_desk_Officer/`, etc., if needed.

3. **Database Setup**:
   - Create a MySQL database named `th_ctms`.
   - Import or manually create tables for users, movies, bookings, etc. (Refer to code for schema).
   - Insert demo data (see below).

4. **Configuration**:
   - Update database credentials in `employees/includes/Database.php` if needed.

5. **Run**:
   - Start your web server and MySQL.
   - Access customer side: `http://localhost/CTMS/cu/signin.php`
   - Access employee side: `http://localhost/CTMS/employees/login.php`

## Database Demo Data

### Admin Users (TH_admin table)
- Password: `Admin123!`

### Other Employees (employee table)
- Manager Password: `Manager123!`
- Officer Password: `Officer123!`

## Usage

### Customer
1. Sign up or log in at `cu/signin.php`.
2. Browse movies on `cu/main.php`.
3. Select a movie, choose seats, and book.

### Employee
1. Log in at `employees/login.php` with emp_id and password.
2. Access role-specific dashboards.

## Password Requirements
- At least 8 characters
- One uppercase letter
- One lowercase letter
- One special character (e.g., !@#$%)

## Credits
Developed by Suraj Kumar Vishwakarma.  
Visit [codeastro.com](https://codeastro.com) for more projects.

## License
This project is for educational purposes. Check with the developer for usage rights.
