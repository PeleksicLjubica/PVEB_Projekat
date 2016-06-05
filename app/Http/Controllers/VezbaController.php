<?php
/**
 * Created by PhpStorm.
 * User: Ljubica
 * Date: 22.5.2016
 * Time: 22:19
 * kontroler koji se odnosi na uzimanje podataka o vežbama iz baze

 */

namespace App\Http\Controllers;

use App\Models\Vezba;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VezbaController extends Controller{

    //funkcija koja uzima sve vezbe iz baze a zatim se redirektuje na vezbe.php gde se one prikazuju
    public function getAll(){
        $vezbe = Vezba::all();
        return response()->json(['data'=>$vezbe]);
    }

    public function getView() {
        return view('vezbe',['admin' => 1]);
    }

    public function obradi(Request $request){

        $vezba = new Vezba;
        $vezba->naziv = $request->input('naziv');
        $vezba->opis = $request->input('opis');
        $vezba->tip = $request->input('tip');
        $vezba->Predmet_id_predmeta=15;
        $vezba->save();

        return view('vezbe',['admin' => 1]);

    }


}