<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserDetail;
use App\Models\User;
use Notification;
use Validator;
use DB;

class AuthGoogleController extends Controller
{
    /**
     * Create a new AuthController instance.
     * Auth Controller With Gmail and OTP
     * @return void
     */
    protected $jwt;

    public function __construct(JWTAuth $jwt)
    {
         $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'avatar' => 'required',
            'device_token' => 'required'
        ]);

        $session_mobile = Str::random(40);

        $user   = User::where('email', $request->email)->first();
        if(!$user){
            $user = User::create([
                'name'          => $request->name,
                'email'         => $request->email,
                'device_token'  => $request->device_token,
                'session_mobile'=> $session_mobile
            ]);

            UserDetail::create([
                'user_id' => $user->id,
                'avatar'        => $request->avatar
            ]);

        }else{
            $user->update([
                'session_mobile' => $session_mobile
            ]);
        }

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'access_token'      => $token,
            'session_mobile'    => $session_mobile,
            'token_type'        => 'bearer'
        ], 200);

    }

}
