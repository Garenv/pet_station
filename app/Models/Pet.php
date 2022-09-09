<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    public $table = 'pet_detail';
    /**
     * @var string[]
     */
    protected $fillable = [
        'breed_id',
        'pet_name',
        'pet_date_of_birth',
        'pet_age',
        'owner_name'
    ];
}
