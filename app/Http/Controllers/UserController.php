<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser()
    {
        $user = request()->user();
        return response([
            "user" => [
                "user" => $user,
                "user_roles" => $user->roles,
                "user_permissions" =>  $user->permissions,
            ],
        ], 200);
    }
}
