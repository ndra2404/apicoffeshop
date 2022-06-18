<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        if (Auth::attempt(['username' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            return response()->json(
                [
                    'status' => true,
                    'data' => $user,
                ],
                200
            );
        } else {
            return response()->json(['status'=>false,'msg' => 'Unauthorised','data'=>
            [
                "user_id"=>'',
                "level"=>'',
            ]
        ], 200);
        }
    }
}
