<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser()
    {
        $user = request()->user()->with('coachProfile.educations', 'coachProfile.experiences', 'businessProfile.owners', 'businessProfile.bookings')->first();
        return response([
            "user" => [
                "user" => $user,
                "user_roles" => $user->roles,
                "user_permissions" =>  $user->permissions,
            ],
        ], 200);
    }
}
