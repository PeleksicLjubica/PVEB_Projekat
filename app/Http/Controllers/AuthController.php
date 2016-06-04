<?php
/**
 * Created by PhpStorm.
 * User: ivanmilic
 * Date: 5/28/16
 * Time: 11:57
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;

class AuthController extends Controller
{
    /**
     * @var \Tymon\JWTAuth\JWTAuth
     */
    protected $jwt;

    public function __construct(JWTAuth $jwt)
    {
        $this->jwt = $jwt;
    }

    public function postLogin(Request $request)
    {
        
        $this->validate($request, [
            'email'    => 'required|email|max:255',
            'password' => 'required',
        ]);

        if (! $token = $this->jwt->attempt($request->only('email', 'password'))) {
            return response()->json(['user_not_found'], 404);
        }
       
        return response()->json(compact('token'));

    }
    
    public function logout(Request $request) {
        if ($this->jwt->parseToken()->invalidate()) {
            return response()->json('success', 200);
        } else {
            return response()->json('failed_to_logout', 500);
        }
    }
}
