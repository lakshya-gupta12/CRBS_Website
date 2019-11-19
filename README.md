# Online Conference Room Booking System

## How to use this project
  - Clone this repo using git
```sh
$ git clone https://github.com/lakshya-gupta12/CRBS_Website.git
```
  - or download the zip file
  - Install xampp
  - Install Composer - This will generate an autoload.php file
  - Install SQLite
  - Install DB Browser
  - Install PHPMailer
  - Put the src folder in the htdocs folder.
  - Run the Apache Server
  - Go to localhost/src/index.php
  - Update the following variables in booking.php
  ```sh
emailid = your email id
emailpwd = your email password
rcvemail = receiver email
```
   - Change the 'Allow less secure apps to acces your mail' setting to allow
   - Run the index.php file to create the database and the table
   - Run the booking.php file to get the room details from the user and send the room details to the receiver.
  


## Contributor
   - Lakshya Gupta(https://github.com/lakshya-gupta12)

## Licence 
    - Apache 2.0 License
