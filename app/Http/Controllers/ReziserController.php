<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 6/8/2016
 * Time: 4:18 PM
 */

namespace App\Http\Controllers;



use App\Models\Reziser;
use App\Models\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ReziserController
{

    public function getAll()
    {
        $results = Reziser::query()

            ->leftjoin('student as st','st.id_studenta', '=', 'reziser.Student_id_studenta')
            ->distinct()
            ->get([
                'st.ime_prezime as ime_prezime',
                'st.id_studenta as id_studenta'

            ]);

        return response()->json(['data'=>$results]);

    }
}