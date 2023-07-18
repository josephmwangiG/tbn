<?php

namespace App\Http\Controllers;

use App\Models\CoachBooking;
use Illuminate\Http\Request;

class CoachBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a request validator
        $data = $request->validate([
            "coach_id" => 'required',
            "business_id" => 'required',
            "reason" => 'required',
            "message" => '',
            "start_date" => 'required',
            "duration" => 'required',
            "meeting_preference" => 'required',

        ]);

        // Create a coach booking
        $coachBooking = CoachBooking::create($data);

        // Return a response
        return response(['coachBooking' => $coachBooking], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(CoachBooking $coachBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // create a request validator
        $data = request()->validate([
            "coach_id" => 'required',
            "business_id" => 'required',
            "reason" => 'required',
            "message" => '',
            "start_date" => 'required',
            "duration" => 'required',
            "meeting_preference" => 'required',
        ]);

        // Find the coach booking
        $coachBooking = CoachBooking::find($id);
        
        // Update the coach booking

        $coachBooking->update($data);

        // Return a response

        return response(['coachBooking' => $coachBooking], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CoachBooking $coachBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CoachBooking $coachBooking)
    {
        //
    }
}
