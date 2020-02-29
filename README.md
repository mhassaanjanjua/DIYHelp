<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About DIY Help

DIY Help offers a platform which would connect a household with a skilled individual. People can share their skills as a freelancer and might also share their equipment with others. The idea is based on the concept of Fab Labs or Maker Spaces where individuals share tools and equipment to fulfill their needs

## Steps to run DIY Help Project

Run the below mentioned commands on a terminal:
- git clone https://github.com/mhassaanjanjua/DIYHelp.git/ DIYHelp
- cd DIYHelp
- composer install
- npm install
- cp .env.example .env
- php artisan key:generate

Now, 
- Create a database in your localhost webserver. 
- Open .env file and fill in DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORDDB_DATABASE options to match the credentials of the database you just created.

Now, open the terminal again and run the below mentioned commands:
- php artisan cache:clear
- php artisan migrate
- php artisan db:seed

### Note
You might need to add Categories and Sub-categories to interact with the application in more detailed manner.
For that, you can run below mentioned commands to add 1 category and 1 sub category.

- php artisan tinker
- $category = new \App\Categories();
- $category-> = 'Home Renovation';
- $category-> description = 'Home improvement has all the services for people wanting to imprve their homes with DIY-Help';
- $category->save();

After running last four commands, 1 category with the name 'Home Renovation' is added in to your database.
If you want to add more categories then just repeat these commands and update the values of name and description.

- $subCat = new \App\SubCategories();
- $subCat->name = 'Door Renovation';
- $subCat->description = 'With Home Improvement, DIY-Help offers people get help for door renovation';
- $subCat->categories_id = 1;
- $subCat->save();

After running these five commands, 1 sub category with the name 'Door Renovation' is added in to your database.

If you want to add more subcategories then repeat the above commands and update the values of name, description and categories_id. Make sure that you enter the correct categories_id because in this way, you are linking the new added sub category to the main category of which you entered the id.

