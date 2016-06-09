<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 6/8/2016
 * Time: 4:13 PM
 */

namespace App\Http\Controllers;


use App\Models\Scenarista;
use App\Models\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScenaristaController
{


    public function getAll()
    {

        $results = Scenarista::query()

            ->leftjoin('student as st','st.id_studenta', '=', 'scenarista.Student_id_studenta')
            ->distinct()
            ->get([
                'st.ime_prezime as ime_prezime',
                'st.id_studenta as id_studenta'
            ]);

        return response()->json(['data'=>$results]);

    }
}