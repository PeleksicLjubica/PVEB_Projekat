<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 6/8/2016
 * Time: 4:21 PM
 */

namespace App\Http\Controllers;

use App\Models\Montazer;
use App\Models\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MontazerController
{

    public function getAll()
    {
        $results = Montazer::query()

            ->leftjoin('student as st','st.id_studenta', '=', 'montazer.Student_id_studenta')
            ->distinct()
            ->get([
                'st.ime_prezime as ime_prezime'
            ]);

        return response()->json(['data'=>$results]);

    }
}