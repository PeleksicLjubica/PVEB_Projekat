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

class GlumacController
{

    public function getAll()
    {

        $results1 = Glumac::query()
            ->get([
                'ime_prezime'
            ]);

        $results = Glumac_student::query()
            ->leftjoin('student as st', 'st.id_studenta', '=', 'glumac_student.Student_id_studenta')
            ->distinct()
            ->get([
                'st.ime_prezime as ime_prezime'
            ])
           ->union($results1);


        return response()->json(['data' => $results]);


    }
}