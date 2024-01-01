<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request) {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'film_id' => 'required|exists:films,id',
            'user_id' => 'required|exists:users,id',
            'nbrTotalOfPlaces' => 'required|numeric|min:1',
        ]);

        // Create the reservation
        $reservations = new Reservation();
        $reservations->film_id = $validatedData['film_id'];
        $reservations->user_id = $validatedData['user_id'];
        $reservations->nbrTotalOfPlaces = $validatedData['nbrTotalOfPlaces'];

        // Save the reservation
        $reservations->save();

        return response()->json(['message' => 'Reservation created successfully'], 201);
    }
}
