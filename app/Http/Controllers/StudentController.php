<?php
/**
 * Created by PhpStorm.
 * User: Ljubica
 * Date: 22.5.2016
 * Time: 22:19
 * kontroler koji se odnosi na uzimanje podataka o vežbama iz baze
 */

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller{

    public function getAll(){

        $studenti = Student::all();
        return response()->json(['data'=>$studenti]);

    }
    
    public function obradi(Request $request){

        $student = new Student;
        $student->indeks= $request->input('indeks');
        $student->ime = $request->input('ime');
        $student->prezime = $request->input('prezime');
        $student->email = $request->input('email');
        $student->godina_studija = $request->input('godina_studija');
        $student->Katedra_naziv = $request->input('katedra');



        $student->save();

        return view('studenti',['admin' => 1]);
    }

    public function inkrementGodine(Request $request){
        $indeks = $request->input('indeks');
        $studenti = Student::where('indeks', $indeks)
            ->take(1)
            ->get();
        $id_studenta = $studenti[0]->id_studenta;
        Student::where('id_studenta', $id_studenta)
            ->increment('godina_studija');
          
        return view('studenti',['admin' => 1]);
    }

    public function getView() {
        return view('studenti',['admin' => 1]);
    }


}