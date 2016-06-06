<?php
/**
 * Created by PhpStorm.
 * User: Ljubica
 * Date: 22.5.2016
 * Time: 22:19
 * kontroler koji se odnosi na uzimanje podataka o vežbama iz baze

 */

namespace App\Http\Controllers;

use App\Models\Predmet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PredmetController extends Controller{

    //funkcija koja uzima sve predmete iz baze
    public function getAll(){
        $predmet = Predmet::all();
        return response()->json(['data'=>$predmet]);
    }

}