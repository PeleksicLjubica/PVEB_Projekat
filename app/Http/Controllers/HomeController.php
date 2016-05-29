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
            if ($user = $this->jwt->parseToken()->authenticate()) {
                return view('index', ['admin' => 1]);
            } else {
                return view('index', ['admin' => 2]);
            }
        } else {
            return view('index', ['admin' => 0]);
        }
    }
}