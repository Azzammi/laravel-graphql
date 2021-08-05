# GraphQL with Laravel 8

Using Laravel 

The tutorial to create and run [Freecodecamp](https://www.freecodecamp.org/news/build-a-graphql-api-using-laravel) 
For Test The API with Postman [Freecodecamp](https://www.freecodecamp.org/news/build-graphql-server-with-laravel)

To deliver you app on a server, you have to (on you dev environement) :

  * Git clone the tag/branch that you want to deliver
  * Launch the command `composer install`
  * Rename `env.example` to `env`
  * Adjust di env file
  * run `php artisan key:generate`
  * Create sqlite file
```
touch database/database.sqlite
```
  * run `php artisan migrate:fresh --seed`
  * and just run `php artisan serve`


That's all, you have a beautifull package that can be deliver on a server 

### Library Used :
* [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper)
* [GraphQL Laravel](https://github.com/rebing/graphql-laravel)

## Screenshot
![image](https://user-images.githubusercontent.com/23116326/128286418-397d52f8-af6b-401d-a3dd-bcb7bb90bb7c.png)
![image](https://user-images.githubusercontent.com/23116326/128286506-9baa97ed-9b9c-4819-87d9-2b11757d591c.png)

