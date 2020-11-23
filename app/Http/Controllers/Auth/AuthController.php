<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Tymon\JWTAuth\Facades\JWTAuth as JWTFacades;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;
use App\Models\User;
use Validator;
use DB;

class AuthController extends Controller
{
    /**
     * @var \Tymon\JWTAuth\JWTAuth
     */
    protected $jwt;

    public function __construct(JWTAuth $jwt)
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }


    public function login(Request $request)
    {
        $this->validate($request, [
            'email'         => 'required|email',
            'password'      => 'required'
        ]);

        try {
            $credentials = request(['email', 'password']);
            if (! $token = auth()->attempt($credentials)) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], 500);

        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], 500);

        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent' => $e->getMessage()], 500);

        }

        return $this->respondWithToken($token);
    }



    public function me()
    {
        return response()->json(auth()->user());
    }


    public function logout()
    {
        auth()->logout();
        return response()->json(
            [
                "status_code" => 200,
                "message"=> "Successfully logged out"
            ], 200
        );
    }


    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }


    protected function respondWithToken($token)
    {
        return response()->json([
            "access_token" => $token,
            "token_type" => "bearer",
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }












    // public function register(Request $request)
    // {
    //     //
    // }




    // public function change_password(Request $request)
    // {
    //     $this->validate($request, [
    //         'password' => ['required', new MatchOldPassword],
    //         'new_password' => 'required|min:8|confirmed'
    //     ]);
    //     User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
    //     return response()->json([
    //         'message' => 'Success !!'
    //     ], 200);
    // }


    // public function request_reset(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email'
    //     ]);
    //     $user = User::where('email', $request->email)->first();
    //     if(!$user){
    //         return response()->json([
    //             'message' => 'Not Found !!'
    //          ], 401);
    //     }else{
    //         $token = Str::random(32);
    //         $user->update([
    //             'reset_token' => $token
    //         ]);

    //         $link = env('APP_FRONT') ."/reset-password/".$token;
    //         $content = "<p>
    //              Seseorang telah mengirim permintaan reset password,
    //              <br />
    //              <a href={$link}> Resest Password </a>
    //          </p>";

    //         Queue::push(new SendEmail(array(
    //             'email' => $user->email,
    //             'name' => $user->name,
    //             'subject' => 'Reset Password akun anda!',
    //             'content' => $content
    //         )));
    //     }
    // }

    // public function get_reset(Request $request, $token)
    // {
    //     $user = User::where('reset_token', $token)
    //             ->select('email', 'name')->first();
    //     return response()->json($user);
    // }

    // public function reset_password(Request $request, $token)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required|min:8|confirmed'
    //     ]);

    //     $user = User::where([
    //         ['reset_token', $token],
    //         ['email', $request->email]
    //     ])->first();

    //     if(!$user){
    //         return response()->json([
    //             'message' => 'Not Found !!'
    //         ], 401);
    //     }

    //     $user->update([
    //         'password' => Hash::make($request->password),
    //         'reset_token' => null
    //     ]);

    //     return response()->json([
    //         'message' => 'Success!'
    //     ], 200);

    // }


}
