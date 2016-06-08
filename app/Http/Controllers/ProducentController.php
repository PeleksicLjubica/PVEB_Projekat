<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 6/8/2016
 * Time: 3:04 PM
 */

namespace App\Http\Controllers;

use App\Models\Producent;
use App\Models\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProducentController
{

    public function getAll()
    {


        $results = Producent::query()

            ->leftjoin('student as st','st.id_studenta', '=', 'producent.Student_id_studenta')
            ->distinct()
            ->get([
                'st.ime_prezime as ime_prezime'
            ]);

        return response()->json(['data'=>$results]);

    }
}