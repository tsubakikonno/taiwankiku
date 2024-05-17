<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class FavContact extends Model
{
    use HasFactory;
    public function fav(){
        return $this->belongsTo(Contact::class);
    }

}
