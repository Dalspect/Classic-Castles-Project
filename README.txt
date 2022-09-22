**README**

This folder contains the following content 
to generate/operate our Final Project Website

@ url: https://classiccastles.000webhostapp.com/
(ADMIN user sign in for website)
USERNAME: admin
PASSWORD: password

You can access our website hosting service here 
@ url: https://www.000webhost.com/
EMAIL/USER: JeredMilner1@gmail.com
PASSWORD: wh3500DJ*CC

DATABASE NAME: id16654734_catalog
DATABASE USERNAME: id16654734_admin
DATABASE PASSWORD: CF0|Bu[\x{Tak&8o
WEBSITE PASSWORD: j@o(AvSIQyjeSrpncRvz




*To access database please use phpmyadmin @ url: https://classiccastles.000webhostapp.com/ (Only one Database `id16654734_catalog` should be in there)

about.php           - Using basic html (excluding the navigation bar), creates Classic Castle's about page, mentioning the authors and the new and improved functionality on the site.
catalog.php         - Establishes connection with out mysql server/database and generates images from catalog by what is stored in out "catalog" database, using php to generate html code, we present the user each image within the database using basic MYSQL queries
config.php          - configuration file to establish connection with our MYSQL database. Source code can be found below.

"""
<?php
define('DBHOST', '')
define('DBNAME', id16654734_catalog
define('DBUSER', 'id16654734_admin');
define('DBPASS', 'CF0|Bu[\x{Tak&8o');
define('DBCONNSTRING','mysql:dbname=id16654734_catalog;');
?>
"""

dover.php           - Creates the Dover Castle Page using html/css w/bootstrap
edinburgh.php       - Creates the Edinburgh Castle Page using html/css w/bootstrap
navbar.php          - Navbar used in every webpage. Using PHP to handle form data in Account Tab within Navigation & Bootstrap
imageRemove.php     - Removes image from catalog. Handles form data passed from catalog.php then returns user to catalog. Only user can delete their uploaded images.
imageUpload.php     - Upload image into catalog. Handles form data passed from catalog.php then returns user to catalog. Only a user can upload images to the database/catalog.
index.php           - Home Page for Classic Castle Website, simple designed webpage which informs user the features for the site.
join.php            - Takes form data passed from global.php to create user account.
login.php           - Takes form data passed in from user to sign into their user account.
neuschwanstein.php  - Creates the Neuschwanstein Castle Page using html/css w/bootstrap
signout.php         - Destroys user login session, logs out user.
sources.php         - Simple page dedicated to referencing the sources we incorporated in website such as images and illustrations.
tours.php           - Creates Tours Page which makes use of Google APIs. Provided information such as driving directions and local weather per castle to the user.
versailles.php      - Creates the Versailles Castle Page using html/css w/bootstrap
vianden.php         - Creates the Vianden Castle Page using html/css w/bootstrap
catalog.js          - Using javascript to format how images appear in the gallery, edge cases for each image when they're hovered over to prevent image being shown off user's screen.
global.js           - Creates session for Dark Mode which changes the aesthetic of the site. 
tours.js            - Using Google APIs to create maps which shows the location of each castle and also allows the user to calculate their distance from the castle by driving. Displays other relevant information to the user as well.

(*also file specific css files)

catalog.sql         - Contains MYSQL Statements to create "Catalog" Database schema. Used for storing images, text, etc. in catalog page

