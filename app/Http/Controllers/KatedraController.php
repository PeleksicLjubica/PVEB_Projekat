<?php
/**
 * Created by PhpStorm.
 * User: Ljubica
 * Date: 23.5.2016
 * Time: 2:09
 */

namespace App\Http\Controllers;

use App\Models\Katedra;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KatedraController extends Controller{

    //funkcija koja uzima sve katedre iz baze a zatim se redirektuje na katedra.php gde se one prikazuju
    public function getAll(){

        $katedre = Katedra::all();
        return view('katedre',['katedra' => $katedre[0]]);

    }

}