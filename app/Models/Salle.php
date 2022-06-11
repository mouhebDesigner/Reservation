<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $fillable = [
        "numero",
        "capacite",
        "type_id",
        "image",
        "description"
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function setImageAttribute($image){
        if(request()->hasFile('image')){
            $this->attributes['image'] = $image->store('images');
        }
    }
}
