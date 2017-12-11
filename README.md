
## Requirements

- PHP 5.0 or newer.
- Mysql 5.0 or newer. 
- Web browser to view the checkstyle report (only for html view)
- That's all. 


## Installation

- Download zip file from github and uncompress it and place in web root.
- Make a database name contact and import contact.sql file in that database file is present in the repo.
- Edit .env file with your database credential i.e. username and password. 
- Edit config/database.php put your database credential i.e. username and password.
- Generate key by the below command
- php artisan key:generate 
- paste the in .env file APP_KEY=YOUR_GENERATED_KEY
- hit the below url in browser
- http://localhost:8000/login

## Method to use the app

- Signup or login with dummy user
- dummy credential
- email : john@gmail.com
- password : 6789


# License
Coming Soon
