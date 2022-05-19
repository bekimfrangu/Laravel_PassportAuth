<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        $token = $user->createToken('authToken')->accessToken;

        return response([ 'user' => $user, 'access_token' => $token]);
    }

    public function login( Request $request ) {
        $login = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        if ( !Auth::attempt( $login )) {
            return response( ['message' => 'Invalid login credentials.'] );
        }
        $user = $request->user();
        if ($user) { // Check if we have users in the database
            $accessToken = $user->createToken('authToken')->accessToken;
            return response(['user' => Auth::user(), 'access_token' => $accessToken]);
        } else {
            return response( ['message' => 'No user found in the database.'] );
        }
    }

    public function users()
    {
        return User::all();
    }
}
