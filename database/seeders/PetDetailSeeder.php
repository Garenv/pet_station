<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pet_detail')->insert([
            'breed_id' => 'b-43eaf8a2-2f47-4112-88f1-e08a382df59d',
            'pet_name' => 'Ben',
            'pet_date_of_birth' => '2013-07-05',
            'owner_name' => 'Bob'
        ]);

        DB::table('pet_detail')->insert([
            'breed_id' => 'b-dccc84e6-f796-44f9-97d0-05dd9ff2919f',
            'pet_name' => 'Chewy',
            'pet_date_of_birth' => '2015-01-09',
            'owner_name' => 'Dan'
        ]);

        DB::table('pet_detail')->insert([
            'breed_id' => 'b-f03e2bda-2ff8-4351-9a0c-e8d009fad679',
            'pet_name' => 'Teddy',
            'pet_date_of_birth' => '2004-07-05',
            'owner_name' => 'Joe'
        ]);

        DB::table('pet_detail')->insert([
            'breed_id' => 'b-43eaf8a2-2f47-4112-88f1-e08a382df59d',
            'pet_name' => 'Oscar',
            'pet_date_of_birth' => '2021-04-24',
            'owner_name' => 'Tim'
        ]);

        DB::table('pet_detail')->insert([
            'breed_id' => 'b-dccc84e6-f796-44f9-97d0-05dd9ff2919f',
            'pet_name' => 'Leo',
            'pet_date_of_birth' => '2007-08-29',
            'owner_name' => 'Alice'
        ]);

        DB::table('pet_detail')->insert([
            'breed_id' => 'b-f03e2bda-2ff8-4351-9a0c-e8d009fad679',
            'pet_name' => 'Benji',
            'pet_date_of_birth' => '2001-02-19',
            'owner_name' => 'Stephanie'
        ]);

        DB::table('pet_detail')->insert([
            'breed_id' => 'b-43eaf8a2-2f47-4112-88f1-e08a382df59d',
            'pet_name' => 'Coda',
            'pet_date_of_birth' => '2009-09-06',
            'owner_name' => 'Michael'
        ]);

        DB::table('pet_detail')->insert([
            'breed_id' => 'b-dccc84e6-f796-44f9-97d0-05dd9ff2919f',
            'pet_name' => 'Lucy',
            'pet_date_of_birth' => '2002-05-12',
            'owner_name' => 'Anita'
        ]);

        DB::table('pet_detail')->insert([
            'breed_id' => 'b-f03e2bda-2ff8-4351-9a0c-e8d009fad679',
            'pet_name' => 'Bella',
            'pet_date_of_birth' => '2015-03-21',
            'owner_name' => 'Maria'
        ]);

        DB::table('pet_detail')->insert([
            'breed_id' => 'b-43eaf8a2-2f47-4112-88f1-e08a382df59d',
            'pet_name' => 'Daisy',
            'pet_date_of_birth' => '2013-10-12',
            'owner_name' => 'Sophia'
        ]);
    }
}
