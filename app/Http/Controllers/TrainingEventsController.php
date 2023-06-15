<?php

namespace App\Http\Controllers;

use App\Models\TrainingEvent;
use DateTime;
use Illuminate\Http\Request;

class TrainingEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainingEvents = TrainingEvent::latest()->get();
        return response(['trainingEvents' => $trainingEvents], 200);
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
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'registration_deadline' => 'required|date',
        ]);



        $startDateObj = new DateTime($data['start_date']);
        $endDateObj = new DateTime($data['end_date']);

        $interval = $startDateObj->diff($endDateObj);

        $months = $interval->m;
        $days = $interval->d;

        $data['duration'] =  "Duration: {$months} months and {$days} days";

        // Upload and save the event image
        if ($request->hasFile('image')) {
            $image = $request->file('event_image');
            $imagePath = $image->store('uploads/events', 'public');
            $data['image'] = $imagePath;
        }

        // Create a new TrainingEvent instance with mass assignment
        TrainingEvent::create($data);

        $trainingEvents = TrainingEvent::latest()->get();
        return response(['trainingEvents' => $trainingEvents], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
