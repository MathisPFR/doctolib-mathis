<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();

        return response()->json($appointments);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'type' => 'required',
            'description' => 'required',
            'doctor' => 'required',
            'date' => 'required',
        
        ]);

        $appointments = Appointment::create([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'doctor' => $request->doctor,
            'date' => $request->date,
            'user_id' => '1',
        ]);

        return response()->json($appointments, 201);
    }
}
