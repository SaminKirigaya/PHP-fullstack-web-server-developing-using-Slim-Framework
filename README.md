
# PHP-fullstack-web-server-developing-using-Slim-Framework

The project is for developing a custom routing based web server where we design CRUD operation using MySqli and controlling users to manually getting inside our server web pages.


## Installation

You can clone my project in your root directory.
But, make sure to install slim framework, from official page you can install that.
Just type in your terminal of working directory (root) : 
```bash
    composer require slim/slim:"4.*"
    composer require slim/psr7
```
You need to have composer installed for it.    
Once, you install this two component you will get a vendor folder consisting slim framework in your root.

## Optimizations

I made sure the operation was good enough to demonstrate CRUD operation for a PHP MVC framework.

But, I didn't tried much to make complete responsive css design beside the bootstrap. So make sure to optimize it further for 4k designs.

Also you can set up more better regex condition for user regestration form to take values and apply them as your need.

Also, I checked the whole server in my local apache server. So, if you see any link such as :
https://localhost change it to your domain name like :
https://www.something.com (If you are hosting in a cpanel or any server).

- Specially, check navbar links for adjustment if you see any https://localhost 

Make sure to import the sql file that I provided in your database and name config setup of database according the mysqli_connect( ).

