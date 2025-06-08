# Prerequisites
Make sure you have installed:

1.XAMPP 
(It includes Apache server, PHP, and MySQL)

# Step-by-Step Instructions
1. Start XAMPP Services
  Open XAMPP Control Panel.
  Click Start next to:
    1. Apache
    2. MySQL

You should see green indicators for both services.

2. Set Up the Project Files

Copy the project folder to:
C:\xampp\htdocs\
So it becomes:
C:\xampp\htdocs\DemoBase\

3. Set Up the Database
Open your browser and go to:
👉 http://localhost/phpmyadmin

1. Click “New” from the sidebar.
2. Enter demobase as the database name and click “Create”.
3. Click on the demobase database you just created.
4. Go to the SQL tab and run this SQL query to create the users table:

  CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    password VARCHAR(255) NOT NULL
  );
  
4. Test the App in Your Browser
Open a browser and go to:

Sign Up Page:
http://localhost/DemoBaseWebsite/signup.html

Log In Page:
http://localhost/DemoBaseWebsite/login.html

Homepage (after login):
http://localhost/DemoBaseWebsite/index.html

# How It Works:
1. Signup form → sends data to signup.php → stores in MySQL.
2. Login form → checks data via home.php → redirects if valid/invalid.
3. config.php manages the DB connection.
