<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        "raison",
        "date_debut",
        "date_fin",
        "user_id",
        "salle_id"
    ];

}
