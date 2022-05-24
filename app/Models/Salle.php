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
        "type_id"
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
