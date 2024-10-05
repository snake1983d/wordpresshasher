# wordpresshasher
Wordpress password hasher connects to pluggable.php and hashes a plain text password then shows it.

WordPress Password Hash Generator
This project demonstrates how to use WordPress's built-in password hashing function, wp_hash_password(), in an external PHP script to generate hashed passwords. The script interacts with the core WordPress files to securely hash a user-provided password via a simple HTML form.

Features
Accepts a plain text password from an HTML form.
Uses WordPress's wp_hash_password() function to securely hash the password.
Displays the hashed password after form submission.

How It Works:
The user inputs their password in the HTML form (index.html).
The password is submitted to the PHP backend (hash_password.php).
The PHP script includes WordPress's pluggable.php file, where the wp_hash_password() function is located.
The password is hashed using WordPress’s built-in functionality and then displayed to the user.

Requirements:
PHP (version 7.0 or higher recommended)
A local or live WordPress installation for accessing the pluggable.php file.
A web server environment like XAMPP or MAMP.

Setup Instructions:
Download or clone this repository.
Place the files in the root directory of your WordPress installation (or an accessible directory in your web server).
Open the pwgen.html file in a browser.
Enter a password and submit it.
The hashed version of the password will be displayed on the next page.
