# Camagru Demonstration

An image sharing andd editing site.

# Requirements

- PHP

- MAAMP/XAMPP

- JavaScript


# Installation


# How to download source code


- Navigate to https://github.com/dimpho0101/Camagru_Submission


# How to set up and configure the database 

- Download MAMP or XAMPP from their respective sites

- Copy the camagru folder into:
  # For MAMP:
  
    - MAMP/apache/htdocs/
    
  # For XAMPP:
  
  - XAMPP/htdocs/
  
  # How to run the program
  - navigate to http://localhost:(the port number)/index.php
  
  # Code breakdown
  
- Back-end technologies
      - PHP
      - JavaScript
  
  
-Front-end technologies
      - HTML
      - CSS
      
-Database management systems
       - mysql


- App folder structure
       - Config
          - database.php
          - setup.php
          - uninstall.php
           
- emojies
  - stores overlay images
  
- img/gal
  - stores captured or uploaded images.
  
- includes/functions.php
  - contains code that has multiple functions, including: password reset, sign up, send email, login
  
  
# Testing 

- These are the following tests that I ran:


i. Premilimary checks a. Usage of php b. No external frameworks c. config/database.php d. config/set.php e.PDO's

ii. Start the web server

iii. Create an account

iv. Login

v.Webcam

vi. Homepage

vii. Change user credentials

- These are the following expected outcomes:

i. a. The backend must have been written in PHP
   b. After looking through the source code, there must not be any external framework.
   c. After looking through the source code, config/database.php must exist
   d. After looking through the source code, config/setup.php must exist
   e. After looking through the source code in config/database.php, the set up must have been done in PDO
   
ii. After starting the webserver from either MAMP or XAMPP, and navigate to localhost/(port number)/index.php, you should see the landing page for Camagru

iii. You should be able to navigate to the sign up modal, and enter your credentials. And to receive email verification.

iv. You should be able to login using the credentials you created.

v. You should be able to navigate to the home page and see a webcam after allowing camagru to access your internal webcam.

vi. You should be able to access the home page of the account you created and no one else's.

vii. You should be able to navigate to profile.php and change your user account details. If you change your username, it should be different.

