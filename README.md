# web-Path-Tasks---Smart-Methods-Course
this repository contains tasks of web paths with smart methods

# task one Personal Web Page
This project is a simple personal web page that displays basic information about me.  
It is built using **Flutter** and **Dart** programming language



# task two User Data Submission Web App with Real-Time Status Toggle
Open your browser and go to:  
http://localhost/user-web-app/index.html
# الملفات المرفقه الجديدة متعلقة بالتاسك التاني 
## Steps:

1- Setting up the environment
1.1- Install XAMPP (or any local web server with PHP and MySQL support)  
1.2- Start Apache and MySQL services via XAMPP control panel  
1.3- Open phpMyAdmin at `http://localhost/phpmyadmin` to manage databases  

2- Creating the MySQL database and table
2.1- Create a new database named `my_database`  
2.2- Create a table `users` with the following columns:  
- `id` INT AUTO_INCREMENT PRIMARY KEY  
- `name` VARCHAR(100)  
- `age` INT  
- `status` TINYINT(1) DEFAULT 0  

3- Preparing the project files
3.1- Create `index.html` with a one-line form for name, age, and a submit button  
3.2- Create `submit.php` to accept POST requests and insert submitted data into the database  
3.3- Create `fetch.php` to retrieve all records from the database and display them in an HTML table  
3.4- Create `toggle.php` to switch the status value between 0 and 1 for a given record  

4- Implementing the front-end logic
4.1- Add JavaScript inside `index.html` to intercept the form submission  
4.2- Use `fetch()` API to send form data asynchronously to `submit.php`  
4.3- Reload the records table dynamically by fetching updated data from `fetch.php`  
4.4- Attach toggle buttons to each record that call `toggle.php` to update status in real time  

5- Testing the application
5.1- Open the app in a browser at `http://localhost/user-web-app/index.html`  
5.2- Submit user data via the form  
5.3- Verify the new record appears immediately in the table below  
5.4- Click toggle buttons to switch status and see instant updates without page reload  

6- Final result
- User data stored successfully in MySQL database  
- Records displayed in a table beneath the form  
- Real-time toggle of status between 0 and 1 reflected immediately on the page  



