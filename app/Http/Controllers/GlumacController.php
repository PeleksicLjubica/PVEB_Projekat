<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 6/8/2016
 * Time: 4:57 PM
 */

namespace App\Http\Controllers;



use App\Models\Glumac;
use App\Models\Glumac_student;

use App\Models\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class GlumacController
{

    public function getAll()
    {


        $results1 = Glumac::query()
            ->select('ime_prezime')
            ->distinct();


        $results = Glumac_student::query()
            ->leftjoin('student as st', 'st.id_studenta', '=', 'glumac_student.Student_id_studenta')
            ->distinct()
            ->select(DB::raw('CONCAT(st.ime_prezime, " ", st.indeks) AS ime_prezime'))
            ->union($results1)
            ->get();


        return response()->json(['data' => $results]);


    }
}