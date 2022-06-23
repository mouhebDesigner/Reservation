<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use Auth;
class ReservationController extends Controller
{

    public function index(){
        if(Auth::user()->isAdmin()){

            $reservations = Reservation::paginate(10);
        } else {
            $reservations = Auth::user()->reservations()->paginate(10);

        }
        return view('reservations.index', compact('reservations'));
    }
    public function create($salle_id){

        return view('salles.reserver', compact('salle_id'));

    }

    public function store(ReservationRequest $request){

        $reservations = Reservation::where('status', 'accepter')->where(
            function($query) use ($request) {
                return 
                    $query->whereBetween('date_debut', [$request->date_debut, $request->date_fin])
                    ->orWhereBetween('date_fin', [$request->date_debut, $request->date_fin]);
            }
        )->get();
        if($reservations->count()){
            return redirect()->back()->with('reserved', 'Cet date est déjà réserver');
        }
        // select * from reservation where date_debut between []
        Reservation::create($request->all());

        return redirect('salles')->with('success', 'Vous avez réservé la salle avec succé');
    }
    
    public function annuler(Reservation $reservation){
        $reservation->update([
            "status" => "annuler"
        ]);
        
        return response()->json([
            "deleted" => "Réservation a été annulé"
        ]);

    }
    public function accepter(Reservation $reservation){
        $reservation->update([
            "status" => "accepter"
        ]);
        
        return response()->json([
            "deleted" => "Réservation a été accepté"
        ]);

    }
    public function refuser(Reservation $reservation){
        $reservation->update([
            "status" => "refuser"
        ]);
        
        return response()->json([
            "deleted" => "Réservation a été refusé"
        ]);

    }
}
