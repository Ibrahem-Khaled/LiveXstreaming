<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'image'];



    public function channel()
    {
        return $this->hasMany(Channel::class, 'categorie_id', 'id');
    }
}
