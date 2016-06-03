<?php
/**
 * Created by PhpStorm.
 * User: ivanmilic
 * Date: 5/29/16
 * Time: 13:20
 */

namespace App\Http\Controllers;


use Assetic\Filter\PackagerFilter;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;

class HomeController extends Controller
{
    /**
     * @var \Tymon\JWTAuth\JWTAuth
     */
    protected $jwt;


    public function __construct(JWTAuth $jwt)
    {
        $this->jwt = $jwt;
    }

    public function getHome (Request $request) {
        
        if ($this->jwt->getToken()) {
            if ($user = $this->jwt->parseToken()->authenticate() ) {
                try {
                    $newToken = $this->jwt->setRequest($request)
                        ->parseToken()
                        ->refresh();
                    $user = $this->jwt->authenticate($newToken);
                } catch (TokenExpiredException $e) {
                    return $this->respond('tymon.jwt.expired', 'token_expired', $e->getStatusCode(), [$e]);
                } catch (JWTException $e) {
                    return $this->respond('tymon.jwt.invalid', 'token_invalid', $e->getStatusCode(), [$e]);
                }
                // send the refreshed token back to the client
                $request->headers->set('Authorization', 'Bearer ' . $newToken);
                return view('index', ['admin' => 1]);
            } else {
                return view('index', ['admin' => 2]);
            }
        } else {
            return view('index', ['admin' => 0]);
        }
    }
}