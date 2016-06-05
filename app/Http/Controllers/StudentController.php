<?php
/**
 * Created by PhpStorm.
 * User: Ljubica
 * Date: 22.5.2016
 * Time: 22:19
 * kontroler koji se odnosi na uzimanje podataka o vežbama iz baze
 */

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller{

    public function getAll(){

        $studenti = Student::all();
        return response()->json(['data'=>$studenti]);

    }

}