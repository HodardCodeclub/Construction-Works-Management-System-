### Project Profile ###


* This is a Construction Works Management System (CWMS) Project for Civil Engineering :

### H H ###


* Any information relate on it plz fell free to contact us on :
0781947445.

This file is to instruct you installing and successfully running cwms.

### What is this repository for? ###

* cwms is a web application.
* Version 1.0.0 beta

### INSTALLATION PREREQUISITES ###

* Apache2 installed
* PHP 5.7 or greater installed
* Mysql

### CONFIGURATION DETAILS ###
After cloning this project to your desired directory[Windows: C:~/xampp/htdocs , Linux: /var/www/html], you need to do the following.  
  
* Configure the database  
-> In DB management app (eg:phpmyadmin, workbench,...), create a database.   
-> Import the database(hodard.sql) from cwms root folder, to your newly created database.  
-> Go into ~/Construction-Works-Management-System--master/cwms/pages/tables and open file 'dbconfig.php' change your local connection values respective to your settings.
-> Change to database connection respective to your mysql configurations on line 3 by removing the password or leave it as empty space.
-> Go into ~/Construction-Works-Management-System--master/ and open file 'dbconnect.php' change your local connection values respective to your settings.
-> Change to database connection respective to your mysql configurations on line 3 by removing the password or leave it as empty space. 

* Run the application  
After finishing the steps above, you will need to run the app on your local machine.  
-> Go into your browser and type http://localhost/Construction-Works-Management-System--master/admin/.  
-> If all was done successfully, you will find a login page.  
-> Use admin@gmail.com as username and 123456 as password.
 

* To add new user
-> http://localhost/Construction-Works-Management-System--master/admin/register.php
-> Fill the form as required.
 
  

  
There you go, every thing done well.  
