Pet Listing - Displays paginated details of pets (Pet Name, Pet Age, and Breed).
Pet Detail - Upon the user clicking on a pet name in the Pet Listing page, it'll redirect the user to the page which contains the data of the pet name.

To run the project:

1. Run `php artisan migrate` to migrate the tables and columns to your DB.

   i. Don't forget to modify your `.env` file's DB credentials.
    
2. Run `php artisan serve` to start the project.


These are insert queries to run in order to populate the DB with sample data
```
INSERT INTO `pet_detail` (`breed_id`, `pet_name`, `pet_date_of_birth`, `pet_age`, `owner_name`) VALUES
('b-43eaf8a2-2f47-4112-88f1-e08a382df59d', 'Ben', '2013-07-05', 9, 'Bob'),
('b-dccc84e6-f796-44f9-97d0-05dd9ff2919f', 'Chewy', '2015-01-09', 3, 'Dan'),
('b-f03e2bda-2ff8-4351-9a0c-e8d009fad679', 'Teddy', '2004-07-05', 5, 'Joe'),
('b-43eaf8a2-2f47-4112-88f1-e08a382df59d', 'Oscar', '2021-04-24', 8, 'Tim'),
('b-dccc84e6-f796-44f9-97d0-05dd9ff2919f', 'Leo', '2007-08-29', 2, 'Alice'),
('b-f03e2bda-2ff8-4351-9a0c-e8d009fad679', 'Benji', '2001-02-19', 1, 'Stephanie'),
('b-43eaf8a2-2f47-4112-88f1-e08a382df59d', 'Coda', '2009-09-06', 3, 'Michael'),
('b-dccc84e6-f796-44f9-97d0-05dd9ff2919f', 'Lucy', '2011-05-12', 7, 'Anita'),
('b-f03e2bda-2ff8-4351-9a0c-e8d009fad679', 'Bella', '2011-03-21', 2, 'Maria'),
('b-43eaf8a2-2f47-4112-88f1-e08a382df59d', 'Daisy', '2011-10-12', 6, 'Sophia');

INSERT INTO `pet_breed` (`breed_id`, `breed_name`, `breed_description`) VALUES
('b-43eaf8a2-2f47-4112-88f1-e08a382df59d', 'Golden Retriever', 'Perfect family dog'),
('b-dccc84e6-f796-44f9-97d0-05dd9ff2919f', 'Siberian Husky', 'Enjoys being in the snow as that is his natural habitat'),
('b-f03e2bda-2ff8-4351-9a0c-e8d009fad679', 'German Shepard', 'A true defender of its owner');
