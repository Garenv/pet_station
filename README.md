***Views***

Pet Listing - Displays a paginated table of information with regard to the pets (Pet Name, Pet Age, and Breed).

Pet Detail - Upon the user clicking on a pet name on the Pet Listing page, it'll redirect the user to the Pet Detail page which contains the data of the pet name.

_Note:_ Don't forget to create a `.env` file and modify it with DB credentials that serves your locally defined DB setup in order to migrate the tables and columns successfully (Since `.env` is in the `.gitignore` and will *not* come out of the box if you're cloning this project).

For example:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pet_station
DB_USERNAME=root
DB_PASSWORD=root
```

***Running the project***

In the project's directory:

1. Run `composer install` to install all the dependencies specified in the `composer.lock` file.

2. Run `php artisan migrate` to migrate the tables and columns to your locally defined DB.

3. Run `php artisan db:seed` to populate both the `pet_detail` and the `pet_breed` tables with sample data. 
    
4. Run `php artisan serve` to start the project.
