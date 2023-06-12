<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $coaches = Coach::latest()->get();
        return response(['coaches' => $coaches], 200);
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
            "name" => 'required',
            "email" => 'required',
            "password" => 'required',
            "highest_level_of_education" => '',
            "description" => '',
            "website" => '',
            "phone_number" => 'required',
            "specialization" => 'required',
        ]);

        $user  = User::create([
            "email" => $data['email'],
            "password" => Hash::make($data['password']),
            "name" => $data['name']
        ]);


        $data['user_id'] = $user->id;

        Coach::create($data);

        return response(["success" => "Success"], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Coach $coach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coach $coach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coach $coach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coach $coach)
    {
        //
    }
}
