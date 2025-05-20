# 📬 Contact Management System - Property Studios IT Assessment

This is a simple PHP & MySQL-based contact management system developed for the Junior Systems Developer assessment. It includes a user-facing contact form and an admin panel to view submitted entries.

---

## ✅ Features Implemented

- Contact form with:
  - Name
  - Email
  - Message
- Email format validation
- Input sanitization for security
- Secure MySQL data insertion using prepared statements
- Admin panel to view all submissions
  - Sorted by most recent
  - Shows name, email, message, and date submitted (in readable format)
- Email addresses displayed as plain text (no mailto links)

---

## 📦 Folder Structure

contact-system/
├── index.php # Contact form
├── submit.php # Handles form submission
├── admin.php # Admin panel to view submissions
├── db.php # Database connection
└── README.md # Project instructions



How to Set Up and Run the Project

Step 1: Install XAMPP

- Download XAMPP from [https://www.apachefriends.org/](https://www.apachefriends.org/)
- Install it with default options
- Open **XAMPP Control Panel**
  - Start **Apache**
  - Start **MySQL**


Step 2: Set Up the Project Folder
- Navigate to:  
  `C:\xampp\htdocs\`
- Create a new folder called:  
  `contact-system`
- Copy all project files (`index.php`, `submit.php`, `admin.php`, `db.php`) into this folder


Step 3: Set Up the Database

1. Open your browser and go to:  
   `http://localhost/phpmyadmin`

2. Create a new database named:  
   `contact_system`

3. Run the following SQL to create the table:
```sql
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    message TEXT,
    date_submitted DATETIME DEFAULT CURRENT_TIMESTAMP
);

Step 4: Configure Database Connection
In db.php, make sure your database credentials match your local environment:

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'contact_system';

Step 5: Run the Application
Open your browser and go to:
http://localhost/contact-system/index.php
Submit a test message

View submissions at:
http://localhost/contact-system/admin.php

Developer
Name: Sipho Mtshali
Role: Junior Systems Developer Candidate
Email: simphiwesipho55@gmail.com