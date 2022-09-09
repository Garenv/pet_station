<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetBreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pet_breed')->insert([
            'breed_id' => 'b-43eaf8a2-2f47-4112-88f1-e08a382df59d',
            'breed_name' => 'Golden Retriever',
            'breed_Description' => 'Perfect family dog'
        ]);

        DB::table('pet_breed')->insert([
            'breed_id' => 'b-dccc84e6-f796-44f9-97d0-05dd9ff2919f',
            'breed_name' => 'Siberian Husky',
            'breed_Description' => 'Enjoys being in the snow as that is his natural habitat'
        ]);

        DB::table('pet_breed')->insert([
            'breed_id' => 'b-f03e2bda-2ff8-4351-9a0c-e8d009fad679',
            'breed_name' => 'German Shepard',
            'breed_Description' => 'A true defender of its owner'
        ]);
    }
}
