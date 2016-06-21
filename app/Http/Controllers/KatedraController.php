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
        return view('katedre',['admin' => 1]);
    }

    public function getAll() {

        $year=date('Y');

        $katedre = Katedra::query()
        ->join('profesor', 'profesor.id_profesora', '=', 'katedra.Profesor_id_profesora')
        ->where('skolska_godina', $year)
        ->select('katedra.id_katedre as id_katedre', 'katedra.naziv', 'godina_studija', 'skolska_godina', 'profesor.ime_prezime as ime_prezime' )
        ->get();

        return response()->json(['data'=>$katedre]);

    }


}