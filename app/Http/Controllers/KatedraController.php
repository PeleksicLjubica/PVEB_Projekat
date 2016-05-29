<?php
/**
 * Created by PhpStorm.
 * User: Ljubica
 * Date: 23.5.2016
 * Time: 2:09
 */

namespace App\Http\Controllers;

use App\Models\Katedra;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KatedraController extends Controller{


    public function getView() {

        return view('katedre');

    }

}