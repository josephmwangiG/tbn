<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser()
    {
<<<<<<< HEAD
        $user = request()->user()->with('coachProfile.educations', 'coachProfile.experiences', 'businessProfile.owners', 'businessProfile.bookings')->first();
=======
        $user = request()->user()->with('coachProfile')->first();
>>>>>>> e2d8be40585dac585685353618c4bc1246b0bfb9
        return response([
            "user" => [
                "user" => $user,
                "user_roles" => $user->roles,
                "user_permissions" =>  $user->permissions,
            ],
        ], 200);
    }
}
