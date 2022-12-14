<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getPetListing()
    {
        $petListing = DB::table('pet_breed')
            ->select('pet_detail.id', 'pet_breed.breed_name', 'pet_detail.pet_name', 'pet_detail.pet_date_of_birth')
            ->join('pet_detail', 'pet_detail.breed_id', '=', 'pet_breed.breed_id')
            ->paginate(5);

        return view('pet_listing', compact('petListing'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getPetDetail($id)
    {
        $petDetail = Pet::select('pet_breed.breed_name', 'pet_breed.breed_description', 'pet_detail.pet_name', 'pet_detail.pet_name', 'pet_detail.pet_date_of_birth', 'pet_detail.owner_name')
            ->join('pet_breed', 'pet_detail.breed_id', '=', 'pet_breed.breed_id')
            ->findOrFail($id);

        return view('pet_detail', compact('petDetail'));
    }

}
