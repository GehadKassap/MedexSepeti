# MedexSepeti

this is project mainly based on making a simple home page to show latest items and brands

## Technologies I used in project

-   Laravel v ^10
-   RDBMS MYSQL

### Project structure in Laravel

-   in `App/Http/Controllers` : I made a Job `Admin` Folder which contains all the resources controllers of admin and all those controllers are used to manage CRUD operation for admin in dashboard to make home page dynamic and the controllers are :

        -   SettingController
        -   CategoryController
        -   ProductController
        -   BrandController

    > **_NOTE:_** The SettingController is designed only for updating slider for this version and the key must be within (slider_1 || slider_2 || slider_3).

-   in `Routes/admin/web.php` All the routes of admin is applied here
-   in `App\Helpers` as there is multiple method is repeated I made a helper folder to identify repeated methods like `uploading image function` and other methods like setting which will return all the main setting of website like `logo`,`main info`

## Installation

To run this project on your local machine

```bash
  git clone https://github.com/GehadKassap/MedexSepeti.git
```

after clone the project do the following

```bash
  composer install
```

copy the environment file in root folder

```bash
  cp .env.example .env
```

then create new database and replace the name in .env file or create database with the same name

```bash
  php artisan migrate
```

finally now you can run the project by the following command and test API's

```bash
  php artisan serve
```
