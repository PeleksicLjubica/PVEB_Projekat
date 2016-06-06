<?php
/**
 * Created by PhpStorm.
 * User: Ljubica
 * Date: 22.5.2016
 * Time: 22:19
 * kontroler koji se odnosi na uzimanje podataka o vežbama iz baze

 */

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfesorController extends Controller{

    //funkcija koja uzima sve profesore iz baze
    public function getAll(){
        $profesori = Profesor::all();
        return response()->json(['data'=>$profesori]);
    }

}