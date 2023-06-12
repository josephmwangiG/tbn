<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\BusinessOwner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businesses = Business::latest()->get();
        return response(['businesses' => $businesses], 200);
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
            "business_name" => "required",
            "email" => "required:unique:users",
            "address" => "",
            "number_of_employees" => "",
            "specialization" => "",
            "phone_number" => "required",
            "owners" => "",
            "description" => "",
            "annual_revenue" => "",
            "years_of_operation" => "",
            "website" => "",
        ]);

        $user  = User::create([
            "email" => $data['email'],
            "password" => Hash::make($data['password']),
            "name" => $data['full_name']
        ]);

        $data['user_id'] = $user->id;

        $business = Business::create($data);

        foreach ($data['owners'] as $owner) {
            BusinessOwner::create([
                "business_id" => $business->id,
                "name" => $owner['name'],
                "email" => $owner['email'],
                "phone_number" => $owner['phone_number'],
            ]);
        }

        return response(["successe" => $owner['name'], "success", 200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        //
    }
}
