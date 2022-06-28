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
        "salle_id",
        "status",
        "montant",
        "nbr_heures"
    ];

    public function salle(){
        return $this->belongsTo(Salle::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
