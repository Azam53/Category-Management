
## Requirements

- PHP 5.0 or newer.
- Mysql 5.0 or newer. 
- Web browser to view the checkstyle report (only for html view)
- That's all. 


## Installation

- Download zip file from github and uncompress it and place in web root.
- Edit .env file with your database credential i.e. username and password. 
- Edit config/database.php put your database credential i.e. username and password.
- Generate key by the below command
- php artisan key:generate 
- paste the in .env file APP_KEY=YOUR_GENERATED_KEY
- run migration and seeding for the category and user table
- hit the below url in browser
- http://localhost:8000/categorylist

## Method to use the Frontend interface

- login with dummy user
- dummy credential
- email : test@modera.com
- password : modera

## Method to use the API for category management
 1] get all category
   url :http://localhost:8000/api/v1/category
 
 2] get specific category with id 
   url : http://localhost:8000/api/v1/category/29
   
 3] get category by name 
   url : http://localhost:8000/api/v1/categorytype/Men
   
 4] get sub category by parent id
   url : http://localhost:8000/api/v1/subcategory/29
 
 5] creating category is a post request to 
   url :post http://localhost:8000/api/v1/category/store

 6] updating category is a post request to 
   url :post http://localhost:8000/api/v1/category/update


# License
Coming Soon
