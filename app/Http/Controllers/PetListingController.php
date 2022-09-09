<?php

namespace App\Http\Controllers;
use App\Models\PetDetail;
use Illuminate\Support\Facades\DB;

class PetListingController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getPetListing()
    {
        $petData = DB::table('pet_breed')
            ->select('pet_detail.id', 'pet_breed.breed_name', 'pet_detail.pet_name', 'pet_detail.pet_age')
            ->join('pet_detail', 'pet_detail.breed_id', '=', 'pet_breed.breed_id')
            ->paginate(5);

        return view('pet_listing', compact('petData'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getPetDetail($id)
    {
        $petData = PetDetail::findOrFail($id)
            ->select('pet_breed.breed_name', 'pet_breed.breed_description', 'pet_detail.pet_name', 'pet_detail.pet_name', 'pet_detail.pet_date_of_birth', 'pet_detail.pet_age', 'pet_detail.owner_name')
            ->join('pet_breed', 'pet_detail.breed_id', '=', 'pet_breed.breed_id')
            ->findOrFail($id);

        return view('pet_detail', compact('petData'));
    }

}
