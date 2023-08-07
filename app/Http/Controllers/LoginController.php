<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required']
        ]);


        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = User::where(['email' => $credentials['email']])->with('coachProfile.educations', 'coachProfile.experiences', 'businessProfile.owners', 'businessProfile.bookings')->first();
            $token = $user->createToken('authentication', ['All'])->plainTextToken;

            if ($user->status == "Inactive") {
                return response(["message" => "Your account is not active."], 200);
            }

            return response([
                "token" => $token,
                "user" => [
                    "user" => $user,
                    "user_roles" => $user->roles,
                    "user_permissions" =>  $user->permissions,
                ],
            ], 200);
        } else {
            return response(["message" => "Incorrect credentials"], 200);
        }
    }


    public function logout(Request $request)
    {
        $user = $request->user();

        $user->tokens()->delete();

        return response(["message" => "You are now logged out"], 200);
    }
}
