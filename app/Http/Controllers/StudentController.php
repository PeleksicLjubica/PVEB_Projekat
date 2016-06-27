<?php


namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Katedra;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class StudentController extends Controller{

    public function getAll(){
        $year=date('Y');
        $studenti = Student::query()
                ->join('katedra', 'katedra.id_katedre', '=', 'student.katedra_id_katedre')
                ->where('skolska_godina', $year)
                ->select('student.id_studenta as id_studenta', 'student.indeks as indeks', 'student.ime_prezime as ime_prezime',
                 'student.e_mail as e_mail', 'katedra.naziv as naziv', 'katedra.godina_studija as godina_studija' )
                ->get();


        return response()->json(['data'=>$studenti]);

    }
    
    public function obradi(Request $request){
        $student = new Student;
        $student->indeks= $request->input('indeks');
        $student->ime_prezime = $request->input('ime_prezime');
        $student->e_mail = $request->input('e_mail');
        $naziv_katedre = $request->input('katedre');
        $year=date('Y');
        $katedre = Katedra::where('skolska_godina', $year)
            ->where('naziv', $naziv_katedre)
            ->take(1)->get();
        $student->Katedra_id_katedre = $katedre[0]->id_katedre;

        $student->save();

        return view('studenti',['admin' => 1]);
    }


    public function inkrementGodine(Request $request,$id){
            $student  = Student::query()->where('id_studenta',$id)->take(1)->get();
            $id_katedre = $student[0]->katedra_id_katedre;
            $katedre = Katedra::query()->where('id_katedre', $id_katedre)->take(1)->get();
            $year=date('Y')+1;
            $naziv = $katedre[0]->naziv;
            $katedre_n = Katedra::query()->where('naziv', $naziv)
                ->where('skolska_godina', $year)->take(1)->get();
            $id_katedren = $katedre_n[0]->id_katedre;
            $student->id_katedre = $id_katedren;
            Student::query()->where('id_studenta', $id)
                        ->update(['katedra_id_katedre' => $id_katedren]);

            return view('studenti',['admin' => 1]);
        }


    public function getView() {
        return view('studenti',['admin' => 1]);
    }


}