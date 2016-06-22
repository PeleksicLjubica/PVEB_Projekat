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
use App\Models\Vezba_katedra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VezbaController extends Controller{

    //funkcija koja uzima sve vezbe iz baze a zatim se redirektuje na vezbe.php gde se one prikazuju
    public function getAll(){


        $vezbe = Vezba::query()
            ->join('predmet', 'predmet.id_predmeta', '=', 'vezba.Predmet_id_predmeta') //mora naziv tabele
            ->select('vezba.id_vezbe', 'vezba.naziv as naziv_vezbe', 'vezba.opis', 'vezba.tip', 'predmet.naziv as predmet_naziv')
            ->get();


        return response()->json(['data'=>$vezbe]);


    }

    public function obradi(Request $request){

        $vezba = new Vezba;

        $vezba->naziv = $request->input('naziv');
        $vezba->opis = $request->input('opis');
        $vezba->tip = $request->input('tip');
        $vezba->Predmet_id_predmeta = $request->input('predmet');

        $vezba->save();


        $broj_katedri = count($request->input('katedre'));
        $katedre = $request->input('katedre');

        foreach ($katedre as $value) {

            $vezba_katedra = new Vezba_katedra;

            $vezba_katedra->Vezba_id_vezbe = $vezba->id;
            $vezba_katedra->Katedra_id_katedre = $value;

            $vezba_katedra->save();
        }


        return view('vezbe',['admin' => 1]);
    }

    public function getView() {
        return view('vezbe',['admin' => 1]);
    }

}