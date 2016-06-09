<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 6/8/2016
 * Time: 5:37 PM
 */

namespace App\Http\Controllers;

use App\Models\Podrska;
use App\Models\Podrska_student;

use App\Models\Student;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PodrskaController
{


    public function getAll()
    {

        $results1 = Podrska::query()
            ->get(['tip_podrske',
                'ime_prezime'
            ]);

        $results = Podrska_student::query()
            ->leftjoin('student as st', 'st.id_studenta', '=', 'podrska_student.Student_id_studenta')
            ->distinct()
            ->get([
                'podrska_student.tip_podrske',
                'st.ime_prezime as ime_prezime'
            ])
            ->union($results1);


        return response()->json(['data' => $results]);


    }


}