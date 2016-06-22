<?php


namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Katedra;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class StudentController extends Controller{

    public function getAll(){

        $studenti = Student::all();
        return response()->json(['data'=>$studenti]);

    }
    
    public function obradi(Request $request){
        $student = new Student;
        $student->indeks= $request->input('indeks');
        $student->ime_prezime = $request->input('ime_prezime');
        $student->e_mail = $request->input('e_mail');
        $naziv_katedre = $request->input('katedra');
        echo($request->input('katedra'));
        $year=date('Y');
        $katedre = Katedra::where('naziv', $naziv_katedre)
            ->where('godina_studija', $year)->take(1)->get();
        echo($katedre[0]);
        $student->Katedra_id_katedre = $katedre[0]->id_katedre;

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