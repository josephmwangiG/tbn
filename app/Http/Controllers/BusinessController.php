<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\BusinessOwner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            "email" => "required|unique:users",
            "address" => "",
            "number_of_employees" => "",
            "specialization" => "",
            "phone_number" => "required",
            "owners" => "",
            "description" => "",
            "password" => "required",
            "annual_revenue" => "",
            "years_of_operation" => "",
            "website" => "",
        ]);

        DB::transaction(function () use ($data) {
            $user  = User::create([
                "email" => $data['email'],
                "password" => Hash::make($data['password']),
                "name" => $data['business_name']
            ]);

            $data['user_id'] = $user->id;

            $business = Business::create([
                "user_id" => $data['user_id'],
                "business_name" => $data['business_name'],
                "email" => $data['email'],
                "address" => $data['address'],
                "number_of_employees" => $data['number_of_employees'],
                "specialization" => $data['specialization'],
                "phone_number" => $data['phone_number'],
                "description" => $data['description'],
                "annual_revenue" => $data['annual_revenue'],
                "years_of_operation" => $data['years_of_operation'],
                "website" => $data['website'],
            ]);


            foreach ($data['owners'] as $owner) {
                BusinessOwner::create([
                    "business_id" => $business->id,
                    "name" => $owner['name'],
                    "email" => $owner['email'],
                    "phone_number" => $owner['phone_number'],
                ]);
            }
        });

        $businesses = Business::latest()
            ->with('user')
            ->get();

        return response(["success" => "success", "businesses" => $businesses, "success", 200]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $business = Business::where('id', $id)
            ->with('owners', 'bookings', 'user')
            ->first();

        return response(["success" => "success", "business" => $business, "success", 200]);
    }

    public function approveAccount($id, $action)
    {
        $business = Business::find($id);
        $business->update([
            'status' => $action,
        ]);

        $user = $business->user;

        $user->status = $action;

        $user->save();

        $businesses = Business::latest()
            ->with('user')
            ->get();

        return response(['businesses' => $businesses], 200);
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


    public function updateProfile(Request $request, $id)
    {
        $data = $request->validate([
            "business_name" => "required",
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

        $business = Business::find($id);

        $business->update([
            "business_name" => $data['business_name'],
            "address" => $data['address'],
            "number_of_employees" => $data['number_of_employees'],
            "specialization" => $data['specialization'],
            "phone_number" => $data['phone_number'],
            "description" => $data['description'],
            "annual_revenue" => $data['annual_revenue'],
            "years_of_operation" => $data['years_of_operation'],
            "website" => $data['website'],
        ]);

        $business = Business::where('id', $id)
            ->with('owners', 'bookings', 'user')
            ->first();

        return response(["success" => "success", "business" => $business, "success", 200]);
    }

    public function addBusinessOwner(Request $request)
    {
        $data = $request->validate([
            "name" => "required",
            "business_id" => "",
            "email" => "",
            "phone_number" => "required",
        ]);


        BusinessOwner::create($data);

        $business = Business::where('id', $data['business_id'])
            ->with('owners', 'bookings', 'user')
            ->first();

        return response(["success" => "success", "business" => $business, "success", 200]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        //
    }
}
