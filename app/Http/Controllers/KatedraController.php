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
use App\Models\Profesor;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use DB;


class KatedraController extends Controller{


    public function getView() {
        return view('katedre',['admin' => 1]);
    }

    public function getAll() {

        $year=date('Y');

        $katedre = Katedra::query()
        ->join('profesor', 'profesor.id_profesora', '=', 'katedra.Profesor_id_profesora')
        ->select('katedra.id_katedre as id_katedre', 'katedra.naziv', 'godina_studija', 'skolska_godina', 'profesor.ime_prezime as ime_prezime' )
        ->get();

        return response()->json(['data'=>$katedre]);

    }

    public function getPrva(){
        $year=date('Y');
        $katedre = Katedra::query()
                ->join('profesor', 'profesor.id_profesora', '=', 'katedra.Profesor_id_profesora')
                ->where('skolska_godina', $year)
                ->where('godina_studija', 1)
                ->select('katedra.id_katedre as id_katedre', 'katedra.naziv', 'godina_studija', 'skolska_godina', 'profesor.ime_prezime as ime_prezime' )
                ->get();
        return response()->json(['data'=>$katedre]);
    }

    public function getAllNazivGodina() {


        $katedre = Katedra::query()
            ->select(DB::raw('CONCAT(naziv, " ", skolska_godina) AS naziv'))
            ->distinct()
            ->get();

        return response()->json(['data'=>$katedre]);

    }


    public function getAllGodina() {

        $katedre = Katedra::query()
            ->select('godina_studija')
            ->distinct()
            ->get();

        return response()->json(['data'=>$katedre]);

    }

    public function dodajKatedre(Request $request){

        $naziv =  $request->input("naziv_katedre");
        $godina = $request->input("god_studija_katedra");
        $profesor =  $request->input("profesor_katedre");

        $profesorId = Profesor::where('id_profesora', $profesor)
            ->get();

        if (!$profesorId->first()) {

            $profesorUnos = new Profesor();
            $profesorUnos->ime_prezime = $profesor;
            $profesorUnos->save();

        }

        $katedra = new Katedra();
        $katedra->godina_studija = $godina;
        $katedra->skolska_godina = date('Y');
        $katedra->naziv = $naziv;
        if (!$profesorId->first()) {
            $katedra->Profesor_id_profesora = $profesorUnos->id;
        } else {
            $katedra->Profesor_id_profesora = $profesor;
        }

        $katedra->save();

        return view('katedre', ['admin' => 1]);
    }


}