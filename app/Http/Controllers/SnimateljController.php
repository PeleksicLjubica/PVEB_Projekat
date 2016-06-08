<?php
/**
 *
 * Created by PhpStorm.
 * User: milica
 * Date: 6/8/2016
 * Time: 4:15 PM


 */

namespace App\Http\Controllers;

use App\Models\Snimatelj;
use App\Models\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SnimateljController
{
    public function getAll()
    {

        $results = Snimatelj::query()

            ->leftjoin('student as st','st.id_studenta', '=', 'snimatelj.Student_id_studenta')
            ->distinct()
            ->get([
                'st.ime_prezime as ime_prezime'
            ]);

        return response()->json(['data'=>$results]);

    }
}