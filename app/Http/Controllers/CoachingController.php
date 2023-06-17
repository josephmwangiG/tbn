<?php

namespace App\Http\Controllers;

use App\Models\Coaching;
use DateTime;
use Illuminate\Http\Request;

class CoachingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coachings = Coaching::latest()->get();
        return response(['coachings' => $coachings], 200);
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

        // Create a new Coaching instance with mass assignment
        Coaching::create($data);

        $coachings = Coaching::latest()->get();
        return response(['coachings' => $coachings], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Coaching $coaching)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coaching $coaching)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
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

        // Create a new Coaching instance with mass assignment
        $coaching = Coaching::find($id);
        $coaching->update($data);

        $coachings = Coaching::latest()->get();
        return response(['coachings' => $coachings], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $coaching = Coaching::find($id);
        $coaching->delete();

        $coachings = Coaching::latest()->get();
        return response(['coachings' => $coachings], 200);
    }
}
